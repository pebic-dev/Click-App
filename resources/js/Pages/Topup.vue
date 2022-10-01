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
                                <h1 class="text-xl text-center font-bold">Topup</h1>
                                <h1 class="text-center text-sm">To be able to top up your balance you have to send USDT to the address provided below. After you have sent the USDT we need the TXID number provided in to the field below.</h1>
                                <div class="text-center mt-5 mb-5">
                                <h1>Wallet Address</h1>
                                <input type="text" value="TTQ9fjoh3q5PLH1yb1xWshR7D9HsbBU8Ye" class="bg-gray-100 rounded-lg" readonly>
                                <p class="text-xs text-center">Click on the box to copy to clipboard</p>
                                </div>
                                <form @submit.prevent="submit">
                                    <div>
                                        <InputLabel for="trans_id" class="text-center" value="Enter TXID Number" />
                                        <TextInput id="trans_id" type="text" class="mt-1 block w-full" v-model="form.trans_id" required autofocus autocomplete="trans_id" />
                                        <InputError class="mt-2" :message="form.errors.trans_id" />
                                        <div class="text-center">
                                        <PrimaryButton class="mt-4 " :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                        Submit TXID Number
                                    </PrimaryButton>
                                    </div>
                                    </div>
                                </form>
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
    </script>
    