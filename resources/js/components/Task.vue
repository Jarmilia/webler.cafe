<template>
  <ul>
    <liv
      @click="$emit('delete', task)"
    >
      {{task.task}}
    </liv>
  </ul>
</template>

<script>

  export default {
    props: ['task'],
  }
</script>
