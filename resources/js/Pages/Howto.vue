<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import axios from 'axios';
    import { Inertia } from '@inertiajs/inertia'
    import InputError from '@/Components/InputError.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import TextInput from '@/Components/TextInput.vue';
    import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
        
        const form = useForm({
            trans_id: '',
        });
        
        const submit = () => {
            Inertia.visit(route('dashboard'), { method: 'get' });

        };
    </script>
    
    
    <template>
        <Head title="Home" />
    
        <AuthenticatedLayout>
            <div class="">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                           <div class="grid grid-cols-1 gap-4">
                              <div class="vip_group">
                                <div class="heading">
                                <h1 class="text-xl text-center font-bold mb-4">How to use Wishyclick</h1>
                                <h1 class="">
                                The app is divided into four sections (VIP groups) from 1-4. Every sections has set requirements (balance and number of people invited).<br><br> After you topup your balance specific section will be unlocked and you can then proceed to earn money with Wishyclick. Navigate to specific VIP Group and start clicking. For every click you will earn a predetermined percent of your total balance at the time of clicking. <br><br>Daily limit for clicks is 30, and it resets every midnight. <br><br>When you decide you want to withdraw your money you can do so by navigating to withdraw, entering the wallet address and the amount you wish to withdraw. Keep in mind the minimum withdrawal amount is $20. <br><br>Another way you can earn money with Wishyclick is by reffering your friends. Everyday at midnight you get 10% of your invited friends earnings for that day, and it also help you to unlock new VIP Groups.  
                                </h1>
                                <div class="text-center mt-5 mb-5">
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </AuthenticatedLayout>
    </template>