<template>
    <div>
        <jet-banner />
        <div class="flex justify-end sm:hidden">
           <button class="bg-white" v-on:click="clickit">ok</button>
        </div>
        <div class="min-h-screen bg-gray-100 relative sm:flex">
            <nav id="sidenav" class="bg-blue-600 border-b border-gray-100 w-64 absolute transform -translate-x-full inset-y-0 sm:relative sm:translate-x-0 transition duration-400 ease-in">
                 <div class="">navbar</div>
                        
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
    import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink'

    export default {
        components: {
            JetApplicationMark,
            JetBanner,
            JetDropdown,
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
            },
            logout() {
                this.$inertia.post(route('logout'));
            },
        }
    }
</script>
