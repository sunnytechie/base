<template>
     <breeze-authenticated-layout>
   

    <div class="container mt-4">
        <section class="header d-flex justify-content-between">
            <div>
                <div style="color: rgb(180, 144, 144); font-size: 11px; text-transform: uppercase">Overview</div>
                <div class="d-flex">
                <span style="font-weight: 600; font-size: 20px">Setting</span> 
                <div v-if="$page.props.flash.success" class="alert alert-success border-0 py-0 mx-4 text-small" role="alert" style="background: transparent; color: #ddd;">
                            {{ $page.props.flash.success }}
                        </div>
                </div>
            </div>

            <div>
                <button class="btn btn-success btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      <svg style="margin-top: -2px; margin-right: 8px; color: #fff;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg>
                    <span style="color: #fff">Write new</span>
                </button>
            </div>
        </section>
    </div>
    
    <main class="mt-2">

        <div class="container">
            <div class="row">

                <div class="col-lg-3 my-2"> 
                  <div class="card" style="background: #1E293B;">
                    <div class="card-header">Create new category</div>
                    <form @submit.prevent="form.post(route('categories.store'))">
                        <div class="modal-body">

                            <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Category Name</label>
                            <input v-model="form.title" style="padding: 6px 8px; border-radius: 0; font-size: 12px; background-color: #1B2434; color: #fff;" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title..." required>
                            </div>

                            <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Category Icon</label>
                            <!-- Select Icon -->
                            <select v-model="form.icon" style="padding: 6px 8px; border-radius: 0; font-size: 12px; background-color: #1B2434; color: #fff;" class="form-control" id="exampleFormControlSelect1" required>
                                <option value="bi bi-tag">bi bi-tag</option>
                                <option value="bi bi-person">bi bi-person</option>
                                <option value="bi bi-people">bi bi-people</option>
                                <option value="bi bi-pin-map">bi bi-pin-map</option>
                                <option value="bi bi-calendar-event">bi bi-calendar-event</option>
                                <option value="bi bi-list-task">bi bi-list-task</option>
                                <option value="bi bi-file-earmark-lock2">bi bi-file-earmark-lock2</option>
                                <option value="bi bi-coin">bi bi-coin</option>
                                <option value="bi bi-geo">bi bi-geo</option>
                                <option value="bi bi-filter-square">bi bi-filter-square</option>
                                <option value="bi bi-file-earmark-text">bi bi-file-earmark-text</option>
                                <option value="bi bi-calendar2-month">bi bi-calendar2-month</option>
                                <option value="bi bi-activity">bi bi-activity</option>
                                <option value="bi bi-alarm">bi bi-alarm</option>
                                <option value="bi bi-app-indicator">bi bi-app-indicator</option>
                                <option value="bi bi-chat-dots">bi bi-chat-dots</option>
                                <option value="bi bi-currency-exchange">bi bi-currency-exchange</option>
                            </select>
                            </div>

                            <div class="mb-1">
                            <label for="exampleFormControlInput1" class="form-label">Category Type</label>
                            <select v-model="form.type" style="padding: 6px 8px; border-radius: 0; font-size: 12px; background-color: #1B2434; color: #fff;" class="form-control" id="exampleFormControlSelect1" required>
                                <option selected disabled>Select</option>
                                <option value="Created">Created </option>
                                <option value="Default">Default </option>
                            </select>
                            </div>

                        </div>
                        <div class="modal-footer justify-content-end" style="border: 0">
                            <button type="submit" class="btn btn-sm btn-success" :disabled="form.processing" style="color: #ddd">
                                <svg style="margin-top: -4px;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                </svg>
                                <span>Add Now</span>
                            </button>
                        </div>

                        
                    </form>
                    
                  </div>
                </div>

                <div class="col-lg-3 my-2">
                    <div class="card" style="background: #1E293B;">
                        <div class="card-header">Category List</div>
                        <div class="card-body">
                            <!-- List of category -->
                            <ul class="list-group">
                                <li v-for="category in categories" :key="category.id" class="list-group-item" style="background: transparent;">
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <div class="d-flex">
                                                <div class="mr-2" style="margin-top: -2px">
                                                    <i :class='category.icon'></i>
                                                </div>
                                                <div>
                                                    <span class="text-white">{{ category.title }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="btn-group" role="group" aria-label="Button group">
                                            <Link :href="route('categories.edit', category.id)" class="btn btn-primary-1 py-0 px-2" type="button"><i class="bi bi-pencil-square"></i></Link>
                                            <button class="btn btn-primary-1 py-0 px-1" @click="destroy(category.id)" type="button"><i class="bi bi-trash"></i></button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <IconList />

                <Version />

            </div>
        </div>


    </main>
    
    </breeze-authenticated-layout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head, Link, useForm } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'
import Version from '../Shared/Version.vue'
import IconList from '../Shared/Icon.vue'


    export default {
        components: {
    BreezeAuthenticatedLayout,
    Head,
    Link,
    Version,
    IconList,
},

        setup() {
            let form = useForm({
            title: '',
            icon: '',
            type: '',
            })

            let destroy = (id) => {
        if (confirm('Are you sure you want to delete this category?')) {
            Inertia.delete(route('categories.destroy', { id }))
        }
       }

    return {
      form,
        destroy,
    }
  },

    props: {
        categories: Array,
    },

    }
</script>