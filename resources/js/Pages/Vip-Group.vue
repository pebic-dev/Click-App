<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
import axios from 'axios';
import { Inertia } from '@inertiajs/inertia'

</script>

<template>
    <Head title="Home" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                       <div class="grid grid-cols-1 gap-4">
                          <div class="vip_group">
                            <div class="heading">
                            <h1 class="text-center">VIP Group {{this.tier}}</h1>
                            </div>
                            <div class="content content-center">
                              <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="clickModal" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
  <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
    <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800 text-center" id="exampleModalScrollableLabel">
          {{this.adToShow.name}}
        </h5>
        <button type="button"
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body relative p-4">
        <div class="grid grid-cols-2 product">
        <div class="img-div">
        <img class="popup-image" :src="this.adToShow.img_link
">
      </div>
      <div class="product-desc">
        <p class="text-xs font-small">{{this.adToShow.name}}
</p>
      </div>
      </div>
      
      <div class="acc-stats text-center">
        <h5>Total Balance:${{auth.user.balance + auth.user.deposit}}</h5>
        <h5>Commission: ${{(auth.user.balance + auth.user.deposit)*this.percentage / 30}}</h5>
        <h5>New Balance: ${{auth.user.balance + auth.user.deposit + ((auth.user.balance + auth.user.deposit)*this.percentage / 30)}}</h5>
      </div>
      </div>
      <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
        <button type="button"
          class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
          data-bs-dismiss="modal">
          Cancel
        </button>
        <button @click="sendData" type="button" data-bs-dismiss="modal"
          class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
          Submit
        </button>
      </div>
    </div>
  </div>
</div>
<button @click="random" type="button" class="content-center	inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#clickModal">
    Start
  </button>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script>
  import VueSimpleAlert from "vue3-simple-alert";

export default {
  props: {
    ads: Array,
    tier: Number,
    auth: Object,

  },
  data(){
    return {
      adToShow: Array,
      percentage: Number,
    }
  },
 
  methods:{
    random(){
      this.adToShow =this.ads[Math.floor(Math.random() * this.ads.length)];
      if(this.tier == 1){
        this.percentage = 0.04;
      }
      if(this.tier == 2){
        this.percentage = 0.05;
      }
      if(this.tier == 3){
        this.percentage = 0.06;
      }
      if(this.tier == 4){
        this.percentage = 0.065;
      }
    },
    sendData(){
      axios
        .post(window.location.href + "/click")
        .then((response) => {
          Inertia.reload();
        })
        .catch(err => {
          if(err.response){
            alert('Out of clicks');
          }
        });
    }
  }
}
</script>
