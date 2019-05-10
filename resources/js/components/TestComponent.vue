<style lang='scss' scoped>

</style>
<template>
    <div>
        <v2-datepicker v-model="val"></v2-datepicker>
    </div>
</template>
<script>
  import axios from 'axios';

  export default {
    created() {
       console.log('hello');
    },

    mounted() {

    },

    watch: {
      val() {
        if(val.length > 1) {
          this.sendRequest();
        }
      }
    },

    data() {
      return {
        val: '',
      };
    },

    methods: {
      sendRequest() {
        axios.post('/api/time', {
          val: this.val
        }).then(res => {
          console.log('hey there');
        }).catch(err => {
          console.log(err);
        })
      }
    },

    components: {
      v2Datepicker,
    },
  };
</script>