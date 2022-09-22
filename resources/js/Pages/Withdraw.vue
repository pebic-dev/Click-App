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
            amount: '',
            address:'',
        });
        
        const submit = () => {
            Inertia.visit(route('dashboard'), { method: 'get' });

        };
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
                                <h1 class="text-center">Withdraw</h1>
                                <form @submit.prevent="submit">
                                    <div>
                                        <InputLabel for="address" value="Transaction ID" />
                                        <TextInput id="address" type="text" class="mt-1 block w-full" v-model="form.address" required autofocus autocomplete="address" />
                                        <InputError class="mt-2" :message="form.errors.address" />
                                        <InputLabel for="amount" value="Amount" />
                                        <TextInput id="amount" type="text" class="mt-1 block w-full" v-model="form.amount" required autofocus autocomplete="amount" />
                                        <InputError class="mt-2" :message="form.errors.amount" />
                                        <PrimaryButton class="mt-4 " :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                        Withdraw
                                        </PrimaryButton>
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
    