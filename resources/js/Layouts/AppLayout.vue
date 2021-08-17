<template>
    <div>
        <jet-banner />
        <div class="flex fixed inset-x-0 top-0 z-20">
        <div class="home flex items-center ml-2"><inertia-link :href="route('home')"><jet-button class="bg-blue-300 hover:bg-blue-500 inline-flex items-center justify-center">back to home</jet-button></inertia-link></div>
            <div class="-mr-2 flex items-center sm:hidden pr-3 absolute right-0">
                <button @click="this.clickit" class="inline-flex items-center justify-center p-2 bg-blue-300 hover:bg-blue-500 rounded-md text-white focus:outline-none transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
        <div class="h-64 w-full bg-blue-300">        
        </div>
        <div class="min-h-screen bg-gray-100 flex">
            <nav class="sidenav bg-blue-600 border-b border-gray-100 sm:w-1/5 w-48 fixed bottom-0 top-0 sm:top-0 transform -translate-x-full sm:relative sm:translate-x-0 transition duration-300 z-10">
                 <div class="text-white text-2xl font-semibold ml-2 mt-8">Our Services</div>
                  <jet-nav-link :href="route('seat')" class="mt-5">
                     <div class="ml-5">Seat Details</div>
                  </jet-nav-link>
                  <jet-nav-link :href="route('covid')">
                     <div class="ml-5">Covid Section</div>
                  </jet-nav-link>
                  <jet-nav-link :href="route('ambul')">
                     <div class="ml-5">Ambulance</div>
                  </jet-nav-link>
                  <jet-nav-link :href="route('doctor')">
                     <div class="ml-5">Doctor List</div>
                  </jet-nav-link>
                  <jet-nav-link :href="route('loc')">
                     <div class="ml-5">Our Location</div>
                  </jet-nav-link>
            </nav>
            
            <div class="flex-1">
                 
                             <!-- Page Heading -->
                   <header class="bg-white shadow" v-if="$slots.header">
                     <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <slot name="header"></slot>
                     </div>
                 </header>

                <!-- Page Content -->
                 <main>
                     <slot></slot>
                 </main>
    
            </div>
        </div>
    </div>
</template>

<script>
    import JetApplicationMark from '@/Jetstream/ApplicationMark'
    import JetBanner from '@/Jetstream/Banner'
    import JetDropdown from '@/Jetstream/Dropdown'
    import JetDropdownLink from '@/Jetstream/DropdownLink'
    import JetNavLink from '@/Jetstream/NavLink'
    import JetButton from '@/Jetstream/Button'
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink'

    export default {
        components: {
            JetApplicationMark,
            JetBanner,
            JetDropdown,
            JetButton,
            JetDropdownLink,
            JetNavLink,
            JetResponsiveNavLink,
        },

        data() {
            return {
                showingNavigationDropdown: false,
            }
        },

        methods: {
            switchToTeam(team) {
                this.$inertia.put(route('current-team.update'), {
                    'team_id': team.id
                }, {
                    preserveState: false
                })
            },
            clickit(){
                document.querySelector('.sidenav').classList.toggle('-translate-x-full');
                document.querySelector('.home').classList.toggle('hidden');
                this.showingNavigationDropdown=!this.showingNavigationDropdown;
            },
            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    }
</script>
