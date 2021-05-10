<template>
  <div>
      <li class="list-group-item " :class=className><slot></slot></li>

  </div>
</template>

<script>
    export default {

        props:[
            'color',
            'user'

        ],
        computed:{
            className() {
                return 'list-group-item-'+this.color;
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
#time{
    color:red;

}
</style>
