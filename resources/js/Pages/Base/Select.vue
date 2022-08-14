<template>
    <Head title="Dashboard" />
    
    <breeze-authenticated-layout>
    <section class="nav-2">
        <div class="nav container d-flex justify-content-between">
            <nav>
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <Link class="nav-link active-btn" href="/">
                            <svg style="margin-top: -4px; margin-right: 6px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door mx-1" viewBox="0 0 16 16">
                                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                              </svg>
                            <span>Dashboard</span>
                        </Link>
                    </li>
                
                    <li v-for="category in defaultCategories" :key="category.id" class="nav-item">
                        <Link class="nav-link" :href="route('select.index', category.id)">
                              <i :class="category.icon" style="margin-top: -4px; margin-right: 6px"></i>
                              <span>{{ category.title }}</span>
                        </Link>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="mx-1">More</span>
                         <i class="bi bi-arrow-down-short" style="margin-right: 6px"></i>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li v-for="category in createdCategories" :key="category.id">
                            <Link class="dropdown-item" :href="route('select.index', category.id)">
                                <i :class="category.icon" style="margin-top: -4px; margin-right: 6px"></i>
                                <span>{{ category.title }}</span>
                            </Link>
                          </li>


                          <li>
                            <Link class="dropdown-item" href="/settings">
                              <svg style="margin-top: -4px; margin-right: 6px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-node-plus mx-1" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M11 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM6.025 7.5a5 5 0 1 1 0 1H4A1.5 1.5 0 0 1 2.5 10h-1A1.5 1.5 0 0 1 0 8.5v-1A1.5 1.5 0 0 1 1.5 6h1A1.5 1.5 0 0 1 4 7.5h2.025zM11 5a.5.5 0 0 1 .5.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2A.5.5 0 0 1 11 5zM1.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                                </svg>
                              <span>Add more section</span>
                            </Link>
                          </li>

                          
                        </ul>
                    </li>
                </ul>
            </nav>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <form class="d-flex">
                            <input style="color: #F9FBFC" class="form-control search mr-sm-2" type="search" placeholder="Search..." aria-label="Search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                              </svg>
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </section>


    <SecondNav />

    <div class="container mt-4">
        <section class="header d-flex justify-content-between">
            <div>
                <div style="color: rgb(180, 144, 144); font-size: 11px; text-transform: uppercase">Overview</div>
                <div style="font-weight: 600; font-size: 20px">Dashboard</div>
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

                <div class="col-md-2 col-6 my-2" v-for="base in base" :key="base.id">
                    <Link :href="route('base.show', base.id)">
                    <div class="card" style="background: #1E293B; min-height: 200px;">
                      
                      <div class="card-body">
                        <i :class="base.category.icon"  style="float: right; color:rgb(255, 196, 0)"></i>
                        <h5 class="card-title">{{ base.name }}</h5>
                        <p class="card-text p-0">{{ base.description.substr(0, 120) + '...' }}</p>
                        <!-- Badge counting how many threads connected here -->
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                          99+
                        </span>
                      </div>
                    </div>
                  </Link>
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
    defaultCategories: Array,
    createdCategories: Array,
    base: Array,
  },

}
</script>

<style>
    a {
        text-decoration: none;
    }
</style>