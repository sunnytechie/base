<template>
  <Head title="Log in" />

<div class="container-fluid mx-0" style="min-height: 100vh">
  <div class="row">
      <div class="col-md-6 p-5 text-center hide-on-mobile" style="margin-top: 80px;">
        <img class="img" height="300" src="/assets/images/undraw_bg.svg" alt="">
      </div>




      <div class="col-md-6" style="height: 100vh;">
          
        <div class="align-middle margin-top-off-on-mobile">
          <div class="text-center">
              <breeze-validation-errors class="mb-3" />
          </div>
          

          <div v-if="status" class="alert alert-success mb-3 rounded-0" role="alert">
            {{ status }}
          </div>

          <form @submit.prevent="submit" class="p-4 shadow max-with-350" style="background: #1E293B; border-radius: 10px;" autocomplete="false">

            <div class="mb-3">
              <breeze-label for="email" value="Email" style="color: #ddd" />
              <input class="form-control email" style="padding: 6px 8px; border-radius: 5px; font-size: 14px; background: #1B2535;" type="email" v-model="form.email" required autofocus />
            </div>

            <div class="mb-3">
              <breeze-label for="password" value="Password" style="color: #ddd" />
              <input class="form-control password" style="padding: 6px 8px; border-radius: 5px; font-size: 14px; background: #1B2535;" type="password" v-model="form.password" required autocomplete="current-password" />
            </div>

            <!-- <div class="mb-3">
              <div class="form-check">
                <breeze-checkbox id="remember_me" name="remember" v-model:checked="form.remember" />

                <label class="form-check-label" for="remember_me">
                  Remember Me
                </label>
              </div>
            </div> -->

            <div class="mb-3">
              <breeze-button style="background: #2563EB; color:#ddd" class="btn-primary w-100" :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
                  <div v-show="form.processing" class="spinner-border spinner-border-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  
                  Log in
                </breeze-button>
            </div>

            <div class="mb-3">
              <div class="d-flex justify-content-center">
                <Link v-if="canResetPassword" :href="route('password.request')" class="text-muted me-3" style="color: #2563EB">
                  Forgot your password?
                </Link>

                
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>
</div>
    
 

</template>

<script>
import BreezeButton from '@/Components/Button.vue'
import BreezeGuestLayout from "@/Layouts/Guest.vue"
import BreezeInput from '@/Components/Input.vue'
import BreezeCheckbox from '@/Components/Checkbox.vue'
import BreezeLabel from '@/Components/Label.vue'
import BreezeValidationErrors from '@/Components/ValidationErrors.vue'
import { Head, Link } from '@inertiajs/inertia-vue3'
import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue'

export default {
  layout: BreezeGuestLayout,

  components: {
    Head,
    BreezeButton,
    BreezeInput,
    BreezeCheckbox,
    BreezeLabel,
    BreezeValidationErrors,
    Link,
    BreezeApplicationLogo,
  },

  props: {
    canResetPassword: Boolean,
    status: String
  },

  data() {
    return {
      form: this.$inertia.form({
        email: '',
        password: '',
        remember: false
      })
    }
  },

  methods: {
    submit() {
      this.form
          .transform(data => ({
            ... data,
            remember: this.form.remember ? 'on' : ''
          }))
          .post(this.route('login'), {
            onFinish: () => this.form.reset('password'),
          })
    }
  }
}
</script>

<style>
  .card {
    background: #212B3E;
  }

  .email, .password {
    border: none;
    border-radius: 4px;
    background: #1B2535 !important;
    color: #ddd !important;
    padding-right: 28px;
  }

  .email:focus, .password:focus {  background: #212B3E; color: rgb(223, 210, 210); }

  @media screen and (max-width: 426px) {
    .hide-on-mobile {
      display: none;
  }
  
  }

  .margin-top-off-on-mobile {
    margin-top: 30px;
  }

  @media screen and (min-width: 426px) {
    .margin-top-off-on-mobile {
    margin-top: 100px;
  }

  .max-with-350 {
    max-width: 350px;
  }
  
  
  }

/* change email and password autofill background */

   
    .email:-webkit-autofill, .password:-webkit-autofill {
      background: #1B2535 !important;
    }
  

</style>