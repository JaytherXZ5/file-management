<template>
    <!-------------------------------------SET TAILWIND -------------------------------------------->
    
    <nav class="min-w-[200px]">
        <div class="h-[80px] px-3 flex items-center gap-3 border">
            <Link :href="route('myFiles')" class="h-[80px] px-3 flex items-center gap-3 ">
               <ApplicationLogo class="block h-9 w-auto fill-current text-gray-800"/>
            </Link>
            MARIANO MARCOS STATE UNIVERSITY
            

        </div>

        <div class="px-3 border">
            <!------------NAVIGATION------------------------------------------------------->
            <CreateNewDropdown />

            <div class="py-3">              <!--if page url is eaquals to /my-files use ? computed() tailwind code Navlink.vue-->
                <NavLink :href="route('myFiles')" :active="$page.url === '/my-files'" >My Files</NavLink>
                <NavLink href="/" >Shared with Me</NavLink>
                <NavLink href="/" >Shared by me</NavLink>
                <NavLink href="/" >Trash</NavLink>
                

            </div>
        </div>
    </nav> 
    <!-------------------------------------SET TAILWIND -------------------------------------------->
   
</template>
<script setup>

import NavLink from '../NavLink.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import CreateNewDropdown from './CreateNewDropdown.vue';
import { Link } from '@inertiajs/vue3';



</script>
<style lang="">
    
</style>