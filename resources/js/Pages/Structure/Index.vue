<template>
    <Head title="Dashboard" />
    
    <breeze-authenticated-layout>
    <SecondNav />

    <div class="container mt-4">
        <section class="header d-flex justify-content-between">
            <div>
                <div style="color: rgb(180, 144, 144); font-size: 11px; text-transform: uppercase">Overview</div>
                <div style="font-weight: 600; font-size: 20px">Compose</div>
            </div>


            <div>
                <Link href="/settings" class="btn btn-primary-1 btn-sm mx-2 new-section">
                  <svg style="margin-top: -2px; margin-right: 8px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-dotted" viewBox="0 0 16 16">
                    <path d="M2.5 0c-.166 0-.33.016-.487.048l.194.98A1.51 1.51 0 0 1 2.5 1h.458V0H2.5zm2.292 0h-.917v1h.917V0zm1.833 0h-.917v1h.917V0zm1.833 0h-.916v1h.916V0zm1.834 0h-.917v1h.917V0zm1.833 0h-.917v1h.917V0zM13.5 0h-.458v1h.458c.1 0 .199.01.293.029l.194-.981A2.51 2.51 0 0 0 13.5 0zm2.079 1.11a2.511 2.511 0 0 0-.69-.689l-.556.831c.164.11.305.251.415.415l.83-.556zM1.11.421a2.511 2.511 0 0 0-.689.69l.831.556c.11-.164.251-.305.415-.415L1.11.422zM16 2.5c0-.166-.016-.33-.048-.487l-.98.194c.018.094.028.192.028.293v.458h1V2.5zM.048 2.013A2.51 2.51 0 0 0 0 2.5v.458h1V2.5c0-.1.01-.199.029-.293l-.981-.194zM0 3.875v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zM0 5.708v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zM0 7.542v.916h1v-.916H0zm15 .916h1v-.916h-1v.916zM0 9.375v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zm-16 .916v.917h1v-.917H0zm16 .917v-.917h-1v.917h1zm-16 .917v.458c0 .166.016.33.048.487l.98-.194A1.51 1.51 0 0 1 1 13.5v-.458H0zm16 .458v-.458h-1v.458c0 .1-.01.199-.029.293l.981.194c.032-.158.048-.32.048-.487zM.421 14.89c.183.272.417.506.69.689l.556-.831a1.51 1.51 0 0 1-.415-.415l-.83.556zm14.469.689c.272-.183.506-.417.689-.69l-.831-.556c-.11.164-.251.305-.415.415l.556.83zm-12.877.373c.158.032.32.048.487.048h.458v-1H2.5c-.1 0-.199-.01-.293-.029l-.194.981zM13.5 16c.166 0 .33-.016.487-.048l-.194-.98A1.51 1.51 0 0 1 13.5 15h-.458v1h.458zm-9.625 0h.917v-1h-.917v1zm1.833 0h.917v-1h-.917v1zm1.834-1v1h.916v-1h-.916zm1.833 1h.917v-1h-.917v1zm1.833 0h.917v-1h-.917v1zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                  </svg>
                  <span>New section</span>
                </Link>

                <Link href="/structure/select" class="btn btn-success btn-sm" type="button">
                      <svg style="margin-top: -2px; margin-right: 8px; color: #fff;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg>
                    <span style="color: #fff">Write new</span>
                </Link>
            </div>
        </section>
    </div>
    
    <main class="mt-2">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 my-2">
                  <div class="card" style="background: #1E293B; min-height: 200px;">
                    <div class="card-body">
                        <form @submit.prevent="form.post(route('base.store'))">

                            <div class="default">
                                <h5 class="d-flex justify-content-end">Document</h5>
                                <div class="form-group mb-3">
                                    <label for="">Title</label>
                                    <input placeholder="heading of this document" type="text" v-model="form.title" class="form-control" style="padding: 6px 8px; border-radius: 0; font-size: 12px; background-color: #1B2434; color: #fff;" required>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Note</label>
                                    <editor
                                        v-model="form.description"
                                        api-key="no-api-key"
                                        :init="{
                                          height: 600,
                                          content_css : 'dark',
                                          menubar: false,
                                          plugins: [
                                            'advlist autolink lists link image charmap print preview anchor',
                                            'searchreplace visualblocks code fullscreen',
                                            'insertdatetime media table paste code help wordcount'
                                          ],
                                          toolbar:
                                            'undo redo | formatselect | bold italic backcolor | \
                                            alignleft aligncenter alignright alignjustify | \
                                            bullist numlist outdent indent | removeformat | help'
                                        }"
                                      />
                                </div> 
                            </div>


                            <div class="password mt-5" v-if="$props.password">
                                <h5 class="d-flex justify-content-end">Password</h5>
                                <div class="form-group mb-3">
                                    <label for="">username</label>
                                    <input placeholder="A username" type="text" v-model="form.password_username" class="form-control" style="padding: 6px 8px; border-radius: 0; font-size: 12px; background-color: #1B2434; color: #fff;">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Passcode</label>
                                    <input placeholder="Password is not hashed" type="text" v-model="form.password_passcode" class="form-control" style="padding: 6px 8px; border-radius: 0; font-size: 12px; background-color: #1B2434; color: #fff;">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Email</label>
                                    <input type="email" placeholder="E-mail" v-model="form.password_email" class="form-control" style="padding: 6px 8px; border-radius: 0; font-size: 12px; background-color: #1B2434; color: #fff;">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="">Description</label>
                                     <editor
                                        v-model="form.password_description"
                                        api-key="no-api-key"
                                        :init="{
                                          height: 400,
                                          content_css : 'dark',
                                          menubar: false,
                                          plugins: [
                                            'advlist autolink lists link image charmap print preview anchor',
                                            'searchreplace visualblocks code fullscreen',
                                            'insertdatetime media table paste code help wordcount'
                                          ],
                                          toolbar:
                                            'undo redo | formatselect | bold italic backcolor | \
                                            alignleft aligncenter alignright alignjustify | \
                                            bullist numlist outdent indent | removeformat | help'
                                        }"
                                      />
                                </div>
                            </div>

                            
                            <div class="bank mt-5" v-if="$props.bank">
                            <h5 class="d-flex justify-content-end">Bank Information</h5>
                                <div class="form-group">
                                  <label for="my-input">Bank Account Name</label>
                                  <input placeholder="Joshua Emmanuel" id="my-input" class="form-control" type="text" v-model="form.bank_acct_name">
                                </div>

                                <div class="form-group">
                                  <label for="my-input">Bank Name</label>
                                  <input placeholder="Access bank" id="my-input" class="form-control" type="text" v-model="form.bank_name">
                                </div>

                                <div class="form-group">
                                  <label for="my-input">Bank Account Number</label>
                                  <input placeholder="0000000000" id="my-input" class="form-control" type="text" v-model="form.bank_acct_number">
                                </div>
                                  
                                  <div class="form-group">
                                    <label for="my-input">Bank Account Type</label>
                                    <select id="my-select" class="form-control" v-model="form.bank_acct_type">
                                      <option>Savings</option>
                                      <option>Current</option>
                                      <option>Foriegn</option>
                                      <option>Others</option>
                                    </select>
                                  </div>

                                <div class="form-group">
                                  <label for="my-input">Bank Account Pin</label>
                                  <input placeholder="1111" id="my-input" class="form-control" type="text" v-model="form.bank_acct_pin">
                                </div>

                                <div class="form-group">
                                  <label for="my-input">More Description</label>
                                <editor
                                        v-model="form.bank_description"
                                        api-key="no-api-key"
                                        :init="{
                                          height: 400,
                                          content_css : 'dark',
                                          menubar: false,
                                          plugins: [
                                            'advlist autolink lists link image charmap print preview anchor',
                                            'searchreplace visualblocks code fullscreen',
                                            'insertdatetime media table paste code help wordcount'
                                          ],
                                          toolbar:
                                            'undo redo | formatselect | bold italic backcolor | \
                                            alignleft aligncenter alignright alignjustify | \
                                            bullist numlist outdent indent | removeformat | help'
                                        }"
                                      />
                                </div>
                            </div>


                            <div class="event mt-5" v-if="$props.event">
                                <h5 class="d-flex justify-content-end">Event details</h5>
                                <div class="form-group">
                                  <label for="my-input">Event Name</label>
                                  <input placeholder="Upcoming event name" id="my-input" class="form-control" type="text" v-model="form.event_name">
                                </div>

                                <div class="form-group">
                                  <label for="my-input">Event Date</label>
                                  <input id="my-input" class="form-control" type="date" v-model="form.event_date">
                                </div>

                                <div class="form-group">
                                  <label for="my-input">Event Time</label>
                                  <input id="my-input" class="form-control" type="time" v-model="form.event_time">
                                </div>

                                <div class="form-group">
                                  <label for="my-input">Event Location</label>
                                  <input placeholder="Copy location from google locator and past here" id="my-input" class="form-control" type="text" v-model="form.event_location">
                                </div>

                                <div class="form-group">
                                  <label for="my-input">Event Description</label>
                                  <editor
                                        v-model="form.event_description"
                                        api-key="no-api-key"
                                        :init="{
                                          height: 400,
                                          menubar: false,
                                          content_css : 'dark',
                                          plugins: [
                                            'advlist autolink lists link image charmap print preview anchor',
                                            'searchreplace visualblocks code fullscreen',
                                            'insertdatetime media table paste code help wordcount'
                                          ],
                                          toolbar:
                                            'undo redo | formatselect | bold italic backcolor | \
                                            alignleft aligncenter alignright alignjustify | \
                                            bullist numlist outdent indent | removeformat | help'
                                        }"
                                      />
                                    </div>

                                    <div class="form-group">
                                      <label for="my-input">Event Image</label>
                                      <input id="my-input" class="form-control" type="file" @change="form.event_image">
                                    </div>
                                
                            </div>


                            <!-- <div class="projects mt-5" v-if="$props.projects">
                              Projects
                            </div>

                            
                            <div class="land mt-5" v-if="$props.land">
                              Land
                            </div>


                            <div class="image mt-5" v-if="$props.image">
                              Image
                            </div> -->

                            <div class="form-group my-4 d-flex justify-content-end">
                                <button class="btn btn-success" type="submit">Publish</button>
                            </div>
                        </form>
                    </div>
                  </div>
                </div>

                <div class="col-md-3 my-2">
                  <div class="card" style="background: #1E293B; min-height: 200px;">
                    <div class="card-body">
                      <h5 class="card-title">Notifications</h5>
                      <p class="card-text">#Heads up!!!</p>
                    </div>
                  </div>
                </div>


              
            </div>
        </div>


    </main>
    
    </breeze-authenticated-layout>
</template>
<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head, Link, useForm } from '@inertiajs/inertia-vue3'
//import Nav2.vue from Shared folder
import SecondNav from '../Shared/Nav2.vue'
 import Editor from '@tinymce/tinymce-vue'

export default {
  components: {
    BreezeAuthenticatedLayout,
    Head,
    Link,
    SecondNav,
    Editor,
  },

  setup() {
    let form = useForm({
      title: '',
      description: 'Write something here...',
      password_description: 'Write something here...',
      password_username: '',
      password_passcode: '',
      password_email: '',
      bank_acct_type: 'Savings',
      bank_acct_pin: '',
      bank_description: 'Write something here...',
      bank_acct_name: '',
      bank_name: '',
      bank_acct_number: '',
      event_name: '',
      event_date: '',
      event_time: '',
      event_location: '',
      event_description: 'Write something here...',
      event_image: '',

    })
    return {
      form,
    }
  },
  props: {
    password: Object,
    bank: Object,
    event: Object,
    projects: Object,
    land: Object,
    image: Object,
    },  
}
</script>

<style>
input, select, option {
  padding: 6px 8px !important; border-radius: 0 !important; font-size: 12px !important; background-color: #1B2434 !important; color: #fff !important; margin-bottom: 15px !important;
}

.tox .tox-edit-area__iframe {
  background: #1B2434 !important;
  color: #fff !important;
}

.mce-content-body {
  color: #fff !important;
}
  
</style>
