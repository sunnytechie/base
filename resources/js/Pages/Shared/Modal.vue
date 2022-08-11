<template>
    <div class="modal fade modal-new-data" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 style="font-size: 14px;" class="modal-title" id="exampleModalLabel">Structure of document</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form @submit.prevent="form.get(route('structure.index'))">
          <div class="modal-body">

            <div class="form-check form-switch mb-2">
              <input class="form-check-input" v-model="form.document" type="checkbox" id="flexSwitchCheckDefault" checked disabled>
              <label class="form-check-label" for="flexSwitchCheckDefault" style="color: rgb(230, 216, 216)">Post document</label>
            </div>

            <div class="form-check form-switch mb-2">
              <input class="form-check-input" v-model="form.password" type="checkbox" id="flexSwitchCheckChecked1">
              <label class="form-check-label" for="flexSwitchCheckChecked1" style="color: rgb(230, 216, 216)">Has Passwords</label>
            </div>

            <div class="form-check form-switch mb-2">
              <input class="form-check-input" v-model="form.bank" type="checkbox" id="flexSwitchCheckChecked2">
              <label class="form-check-label" for="flexSwitchCheckChecked2" style="color: rgb(230, 216, 216)">Contains bank details</label>
            </div>

            <div class="form-check form-switch mb-2">
              <input class="form-check-input" v-model="form.event" type="checkbox" id="flexSwitchCheckChecked3">
              <label class="form-check-label" for="flexSwitchCheckChecked3" style="color: rgb(230, 216, 216)">Upcoming events</label>
            </div>

            <div class="form-check form-switch mb-2">
              <input class="form-check-input" type="checkbox" v-model="form.note" id="flexSwitchCheckChecked4">
              <label class="form-check-label" for="flexSwitchCheckChecked4" style="color: rgb(230, 216, 216)">My Notes</label>
            </div>

            <div class="form-check form-switch mb-2">
              <input class="form-check-input" v-model="form.calendar" type="checkbox" id="flexSwitchCheckChecked">
              <label class="form-check-label" for="flexSwitchCheckChecked">Has Schedules/Calendar</label>
            </div>

            <div class="form-check form-switch mb-2">
              <input class="form-check-input" type="checkbox" v-model="form.projects" id="flexSwitchCheckChecked5">
              <label class="form-check-label" for="flexSwitchCheckChecked5" style="color: rgb(230, 216, 216)">Make Projects</label>
            </div>

            <div class="form-check form-switch mb-2">
              <input class="form-check-input" type="checkbox" v-model="form.land" id="flexSwitchCheckChecked6">
              <label class="form-check-label" for="flexSwitchCheckChecked6" style="color: rgb(230, 216, 216)">Landed properties with a Map</label>
            </div>

            <div class="form-check form-switch mb-2">
              <input class="form-check-input" type="checkbox" v-model="form.image" id="flexSwitchCheckChecked7">
              <label class="form-check-label" for="flexSwitchCheckChecked7" style="color: rgb(230, 216, 216)">Has many image/Galery</label>
            </div>

          </div>
          <div class="modal-footer" style="border: 0">
            <button type="submit" class="btn btn-sm btn-success" :disabled="form.processing">
                <svg style="margin-top: -4px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                  <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                  <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                </svg>
              <span>Proceed</span>
          </button>
          </div>
        </form>
        </div>
      </div>
      </div>

</template>
<script>
import { Link, useForm } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'

export default {
  components: { Link },

  setup() {
    let form = useForm({
      document: true,
      password: false,
      bank: false,
      event: false,
      note: false,
      calendar: false,
      projects: false,
      land: false,
      image: false
    })
    return {
      form,
    }
  }
}





</script>