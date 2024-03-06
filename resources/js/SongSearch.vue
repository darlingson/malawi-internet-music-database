<template>
    <div>
      <form @submit.prevent="searchSongs">
        <input v-model="query" placeholder="Search for a song">
        <button type="submit">Search</button>
      </form>

      <ul v-if="songs.length">
        <li v-for="song in songs" :key="song.id">
          {{ song.title }} by {{ song.artist }}
        </li>
      </ul>
      <p v-else>No results found</p>
    </div>
  </template>

  <script>
  export default {
    data() {
      return {
        query: '',
        songs: [],
      };
    },
    methods: {
      async searchSongs() {
        try {
          const response = await axios.post('/songs/search', { query: this.query });
          this.songs = response.data;
        } catch (error) {
          console.error('Error fetching songs:', error);
        }
      },
    },
  };
  </script>
