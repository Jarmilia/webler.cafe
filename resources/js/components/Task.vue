<template>
  <ul>
    <liv
      @click="$emit('delete', task)"
    >
      {{task.task}}
       <slot>default</slot> 
    </liv>
  </ul>
</template>

<script>

  export default {
    props: ['task'],
  }
</script>
