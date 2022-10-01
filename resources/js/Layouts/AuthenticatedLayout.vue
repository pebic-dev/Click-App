<script setup>
import { ref } from 'vue';
import ApplicationLogoWhite from '@/Components/ApplicationLogoWhite.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/inertia-vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <div class="min-h-screen">
            <nav class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('dashboard')">
                                    <ApplicationLogoWhite class="block h-9 w-auto" />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                    Dashboard
                                </NavLink>
                                <NavLink v-if="$page.props.auth.user.deposit + $page.props.auth.user.balance >= 30" :href="route('vip1')" :active="route().current('vip1')">
                                    VIP 1
                                </NavLink>
                                <NavLink v-if="$page.props.auth.user.deposit + $page.props.auth.user.balance >= 500" :href="route('vip2')" :active="route().current('vip2')">
                                    VIP 2
                                </NavLink>
                                <NavLink v-if="$page.props.auth.user.deposit + $page.props.auth.user.balance >= 2000" :href="route('vip3')" :active="route().current('vip3')">
                                    VIP 3
                                </NavLink>
                                <NavLink v-if="$page.props.auth.user.deposit + $page.props.auth.user.balance >= 5000" :href="route('vip4')" :active="route().current('vip4')">
                                    VIP 4
                                </NavLink>
                            </div>
                        </div>

                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <!-- Settings Dropdown -->
                            <div class="ml-3 relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                                Total Balance: ${{ $page.props.auth.user.balance + $page.props.auth.user.deposit }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <DropdownLink :href="route('topup')" as="button">
                                            Top Up
                                        </DropdownLink>
                                        <DropdownLink :href="route('withdraw')" as="button">
                                            Withdraw (Available: ${{$page.props.auth.user.balance}} )
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                            <div class="ml-3 relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                                {{ $page.props.auth.user.name }}

                                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <DropdownLink :href="route('logout')" method="post" as="button">
                                            Log Out
                                        </DropdownLink>
                                        <p class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                                            Referrals: {{$page.props.auth.user.reffs}}
                                        </p>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="showingNavigationDropdown = ! showingNavigationDropdown" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}" class="sm:hidden">
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                            Dashboard
                        </ResponsiveNavLink>
                        <ResponsiveNavLink :href="route('vip1')" :active="route().current('vip1')">
                                    VIP 1
                                </ResponsiveNavLink>
                                <ResponsiveNavLink v-if="$page.props.auth.user.deposit + $page.props.auth.user.balance >= 500" :href="route('vip2')" :active="route().current('vip2')">
                                    VIP 2
                                </ResponsiveNavLink>
                                <ResponsiveNavLink v-if="$page.props.auth.user.deposit + $page.props.auth.user.balance >= 2000" :href="route('vip3')" :active="route().current('vip3')">
                                    VIP 3
                                </ResponsiveNavLink>
                                <ResponsiveNavLink v-if="$page.props.auth.user.deposit + $page.props.auth.user.balance  >= 5000" :href="route('vip4')" :active="route().current('vip4')">
                                    VIP 4
                                </ResponsiveNavLink>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="space-y-1">
                            <ResponsiveNavLink :href="route('topup')" as="button">
                                Top Up
                            </ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('withdraw')" as="button">
                                Withdraw <span v-if="$page.props.auth.user.balance > 20">(Available: ${{$page.props.auth.user.balance}} )</span>
                            </ResponsiveNavLink>
                              <ResponsiveNavLink :href="route('howto')" as="button">
                                How to use <span class="blue-text">Wishyclick</span>
                            </ResponsiveNavLink>
                            <ResponsiveNavLink as="button" :href="route('telegram')">
                                Official Support
                                <span><img style="display:inline-block" class="w-5 h-5" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Telegram_logo.svg/240px-Telegram_logo.svg.png"> </span>
                            </ResponsiveNavLink>
                            <ResponsiveNavLink :href="route('refferals')" as="button">
                                My Refferals
                            </ResponsiveNavLink>
                        </div>

                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink :href="route('logout')" method="post" as="button">
                                <span class="font-bold">Log Out</span>
                            </ResponsiveNavLink>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
