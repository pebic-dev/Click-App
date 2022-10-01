<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Home" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
  <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
   
  </div>
  <div class="carousel-inner relative w-full overflow-hidden">
    <div class="carousel-item active relative float-left w-full">
      <img
        src="/media/head.jpg"
        class="block w-full"
        alt="..."
      />
      <div class="carousel-caption hidden md:block absolute text-center">
        <h5 class="text-xl">First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    </div>
  <button
    class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
    type="button"
    data-bs-target="#carouselExampleCaptions"
    data-bs-slide="prev"
  >
    <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
    type="button"
    data-bs-target="#carouselExampleCaptions"
    data-bs-slide="next"
  >
    <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            </h2>
        </template>
        <div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-center text-xl font-bold">Dashboard</h1>
                    <h2 class="mt-2">Name: {{$page.props.auth.user.name}}</h2>
                    <h2 class="mt-2">Email: {{$page.props.auth.user.email}}</h2>
                    <h2 class="mt-2">Balance: ${{$page.props.auth.user.balance + $page.props.auth.user.deposit }}</h2>
                    <h2 class="mt-2">Refferals: {{$page.props.auth.user.reffs }}</h2>
                    <h2 class="mt-2">Remaining Clicks: {{$page.props.auth.user.clicks }}</h2>

                    <div class="mt-2 text-center">
                    <Link href="/topup">
                    <button class="mx-auto inline-flex items-center px-4 py-2 bg-gray-100 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150">Top Up</button>
                    </Link>
                    </div>
                    </div>
                    </div>
                    </div>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-white">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-white-200">
                       <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
                        <div class="vip-box">
                            <div class="vip_box_heading p-2">
                                <h1 class="text-xl font-bold">VIP 1</h1>
                            </div>
                            <div class="vip_box_content">
                                                        <div class="p-2">

                                <h2>Price: $30</h2>
                                <h2>Level: 1</h2>
                                <h2>Max Amount:</h2>
                                <h2>Commission Percent: 4.00%</h2>
                                </div>
                                <Link href="/vip/1">
                                    <img src="/media/1.jpg">
                                </Link>
                                </div>
                        </div>
                        <div class="vip-box">
                            <div class="vip_box_heading p-2">
                                <h1 class="text-xl font-bold">VIP 2</h1>
                            </div>
                            <div class="vip_box_content">
                            <div class="p-2">
                                <h2>Price: $500</h2>
                                <h2>Level: 2</h2>
                                <h2>Max Amount:</h2>
                                <h2>Commission Percent: 5.00%</h2>
                                </div>
                                <img src="/media/2.jpg"></div>
                        </div>
                        <div class="vip-box">
                            <div class="vip_box_heading p-2">
                                <h1 class="text-xl font-bold">VIP 3</h1>
                            </div>
                            <div class="vip_box_content">
                                                        <div class="p-2">

                                <h2>Price: $2000</h2>
                                <h2>Level: 3</h2>
                                <h2>Max Amount:</h2>
                                <h2>Commission Percent: 6.00%</h2>
                                </div>
                                <img src="/media/3.jpg">
                                </div>
                        </div>
                        <div class="vip-box">
                            <div class="vip_box_heading p-2">
                                <h1 class="text-xl font-bold">VIP 4</h1>
                            </div>
                            <div class="vip_box_content">
                                                        <div class="p-2">

                                <h2>Price: $5000</h2>
                                <h2>Level: 4</h2>
                                <h2>Max Amount:</h2>
                                <h2>Commission Percent: 6.50%</h2>
                                </div>
                                <img src="/media/4.jpg"></div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
