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
                                <h1 class="text-center text-xl font-bold">My Referrals</h1>
                                <div class="text-center mt-5 mb-5">
                                <button  @click="copyURL()" class="inline-flex items-center px-4 py-2 bg-gray-100 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150">Copy my refferal link</button>
                                </div>
                                                                <h2 v-for="ref in $page.props.refs">
                                {{ref.name}} ({{ref.email}})
                                </h2>
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
    export default{
        props:{
            refs: Array,
            auth: Object,
        },
        methods: {
        async copyURL() {
            let refLink = window.location.origin + '/register?refferer=' + this.auth.user.name;
            navigator.clipboard
      .writeText(refLink)
      .then(() => {
        alert("Link Copied");
      })
      .catch(() => {
        alert("something went wrong");
      });
        }
}
    }
    </script>
    