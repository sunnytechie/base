<template>
    <div class="modal fade modal-new-section" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 style="font-size: 14px;" class="modal-title" id="exampleModalLabel">New section</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="get" action="">
        <div class="modal-body">

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Provide a name:</label>
              <input style="padding: 6px 8px; border-radius: 0; font-size: 12px; background-color: #1B2434; color: #fff;" type="text" class="form-control" id="exampleFormControlInput1" placeholder="My Resources">
            </div>

        </div>
        <div class="modal-footer" style="border: 0">
          <button type="submit" class="btn btn-sm btn-success">
            <svg style="margin-top: -4px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
            <span>Add Now</span>
        </button>
        </div>
      </form>

      </div>
    </div>
    </div>
</template>
<script setup>
import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue'
import BreezeDropdown from '@/Components/Dropdown.vue'
import BreezeDropdownLink from '@/Components/DropdownLink.vue'
import BreezeNavLink from '@/Components/NavLink.vue'
import { Link } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'

</script>