<template>
    <welcome></welcome>
    <featured-content></featured-content>
    <upcoming-events></upcoming-events>
</template>
<script>
 import Welcome from "./welcome.vue";
 import FeaturedContent from "./FeaturedContent.vue";
 import UpcomingEvents from "./UpcomingEvents.vue";

 export default {
     components: {
         Welcome,
         UpcomingEvents,
         FeaturedContent
     }
 }
</script>
