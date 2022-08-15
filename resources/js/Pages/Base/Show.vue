<template>
    <Head :title="$props.base.name" />
    
    <breeze-authenticated-layout>
    <SecondNav />

        <div class="container mt-4">
        <section class="header d-flex justify-content-between">
            <div>
                <div style="color: rgb(180, 144, 144); font-size: 11px; text-transform: uppercase">Overview</div>
                <div style="font-weight: 600; font-size: 20px">Information</div>
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
    
    <main class="mt-4">

            <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow" style="background-color: #1E293B;">
                    
                            <div class="card-header d-flex justify-content-end">
                                <div>
                                    <Link href="/structure/select" class="btn btn-success btn-sm" type="button">Publish new</Link>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="default">
                                    <div class="d-flex">
                                        <span style="margin-right: 2px; margin-top: -3px;"><i :class="$props.base.category.icon" style="color:rgb(255, 196, 0)"></i></span>
                                        <h5>{{ $props.base.name }}</h5>
                                    </div>
                                
                                    <p>{{  $props.base.description  }}</p>
                                </div>

                                <div v-if="$props.base.event_name" class="mt-5">
                                <hr class="bg-success border-1 border-top border-success">

                                    <div class="d-flex">
                                        <span style="margin-right: 2px; margin-top: -3px;"><i class="bi bi-calendar4-event" style="color:rgb(255, 196, 0)"></i></span>
                                        <h5>{{ $props.base.event_name }}</h5>
                                    </div>

                                    <div>{{ $props.event_date }}</div>
                                    <div>{{ $props.base.event_location }}</div>
                                
                                    <p>{{ $props.base.event_description }}</p>

                                    <img v-if="$props.base.event_image" class="img-fluid" :src="$props.base.event_image" alt="">
                                </div>

                                <div v-if="$props.base.website_name" class="mt-5">
                                <hr class="bg-success border-1 border-top border-success">

                                    <div class="d-flex">
                                        <span style="margin-right: 2px; margin-top: -3px;"><i class="bi bi-calendar4-event" style="color:rgb(255, 196, 0)"></i></span>
                                        <h5>{{ $props.base.website_name }}</h5>
                                    </div>

                                    <div>{{ $props.website_url }}</div>
                                    <div><img v-if="$props.base.website_image" class="img-fluid" :src="$props.base.website_image" alt=""></div>
                                
                                    <p>{{ $props.base.website_username }}</p>
                                    <p>{{ $props.base.website_passcode }}</p>
                                    <p>{{ $props.base.website_email }}</p>
                                    <p>{{ $props.base.website_cpanel_url }}</p>
                                    <p>{{ $props.base.website_cpanel_username }}</p>
                                    <p>{{ $props.base.website_cpanel_passcode }}</p>
                                    <p>{{ $props.base.website_cpanel_email }}</p>
                                    <p>{{ $props.base.website_cpanel_hostname }}</p>
                                    <p>{{ $props.base.website_cpanel_hostpasscode }}</p>
                                    <p>{{ $props.base.website_cpanel_hostemail }}</p>
                                    <p>{{ $props.base.website_cpanel_username }}</p>
                                    <p>{{ $props.base.website_cpanel_passcode }}</p>
                                </div>

                                <div v-if="$props.base.map_location" class="mt-5">
                                <hr class="bg-success border-1 border-top border-success">

                                    <div class="d-flex">
                                        <span style="margin-right: 2px; margin-top: -3px;"><i class="bi bi-calendar4-event" style="color:rgb(255, 196, 0)"></i></span>
                                        <h5>{{ $props.base.map_location }}</h5>
                                    </div>
                                
                                    <p>{{ $props.base.map_description }}</p>

                                    <img v-if="$props.base.map_image" class="img-fluid" :src="$props.base.map_image" alt="">
                                </div>

                                <div v-if="$props.base.social_name" class="mt-5">
                                <hr class="bg-success border-1 border-top border-success">

                                    <div class="d-flex">
                                        <span style="margin-right: 2px; margin-top: -3px;"><i class="bi bi-calendar4-event" style="color:rgb(255, 196, 0)"></i></span>
                                        <h5>{{ $props.base.social_name }}</h5>
                                    </div>
                                
                                    <p>{{ $props.base.social_url }}</p>
                                    <p>{{ $props.base.social_username }}</p>
                                    <p>{{ $props.base.social_passcode }}</p>
                                    <p>{{ $props.base.social_email }}</p>
                                </div>

                                <div v-if="$props.base.task_name" class="mt-5">
                                <hr class="bg-success border-1 border-top border-success">

                                    <div class="d-flex">
                                        <span style="margin-right: 2px; margin-top: -3px;"><i class="bi bi-calendar4-event" style="color:rgb(255, 196, 0)"></i></span>
                                        <h5>{{ $props.base.task_name }}</h5>
                                    </div>

                                    <p>{{ $props.base.task_description }}</p>

                                    <div>{{ $props.task_url }}</div>
                                
                                    <img v-if="$props.base.task_image" class="img-fluid" :src="$props.base.task_image" alt="">
                                </div>

                                <div v-if="$props.base.password_username" class="mt-5">
                                <hr class="bg-success border-1 border-top border-success">

                                    <div class="d-flex">
                                        <span style="margin-right: 2px; margin-top: -3px;"><i class="bi bi-calendar4-event" style="color:rgb(255, 196, 0)"></i></span>
                                        <h5>{{ $props.base.password_username }}</h5>
                                    </div>

                                    <div>{{ $props.password_passcode }}</div>
                                    <div>{{ $props.base.password_email }}</div>
                                
                                    <p>{{ $props.base.password_description }}</p>
                                </div>

                                <div v-if="$props.base.bank_name" class="mt-5">
                                <hr class="bg-success border-1 border-top border-success">

                                    <div class="d-flex">
                                        <span style="margin-right: 2px; margin-top: -3px;"><i class="bi bi-calendar4-event" style="color:rgb(255, 196, 0)"></i></span>
                                        <h5>{{ $props.base.bank_name }}</h5>
                                    </div>
                                
                                    <p>{{ $props.base.bank_description }}</p>

                                    <div>{{ $props.bank_acct_name }}</div>
                                    <div>{{ $props.base.bank_acct_number }}</div>
                                    <div>{{ $props.base.bank_acct_type }}</div>
                                    <div>{{ $props.base.bank_acct_pin }}</div>
                                </div>

                                <div v-if="$props.base.resources_name" class="mt-5">
                                <hr class="bg-success border-1 border-top border-success">

                                    <div class="d-flex">
                                        <span style="margin-right: 2px; margin-top: -3px;"><i class="bi bi-calendar4-event" style="color:rgb(255, 196, 0)"></i></span>
                                        <h5>{{ $props.base.resources_name }}</h5>
                                    </div>

                                    <p>{{ $props.base.event_description }}</p>
                                </div>

                                <div v-if="$props.base.report_name" class="mt-5">
                                <hr class="bg-success border-1 border-top border-success">

                                    <div class="d-flex">
                                        <span style="margin-right: 2px; margin-top: -3px;"><i class="bi bi-calendar4-event" style="color:rgb(255, 196, 0)"></i></span>
                                        <h5>{{ $props.base.report_name }}</h5>
                                    </div>

                                    <p>{{ $props.base.report_description }}</p>

                                    <img v-if="$props.base.report_image" class="img-fluid" :src="$props.base.report_image" alt="">
                                </div>
                                
                            </div>
                </div>
            </div>



            <!-- Thread here -->
            <div class="col-md-4">
                <div class="card shadow" style="background-color: #1E293B;">
                    <div class="card-header d-flex justify-content-between">
                        <div>Thread</div>
                        <div>
                                <!-- <button class="btn btn-success btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Add more fields</button> -->
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="get" action="">
                            <!-- textarea for description -->
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label" style="font-size: 12px;">Description:</label>
                                <textarea style="padding: 6px 8px; border-radius: 0; font-size: 12px; background-color: #1B2434; color: #fff;" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Make your notes here"></textarea>
                            </div>

                            <!-- submit button -->
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-circle" viewBox="0 0 16 16">
                                        <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                                        <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                                      </svg>
                                    Add new</button>
                            </div>
                        </form>  
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
import { Head, Link } from '@inertiajs/inertia-vue3'
//import Nav2.vue from Shared folder
import SecondNav from '../Shared/Nav2.vue'

export default {
  components: {
    BreezeAuthenticatedLayout,
    Head,
    Link,
    SecondNav,
  },

  props: {
    base: Object,
    event_date: Object,
  },
}
</script>
