<template>
    <ul>
      <task  v-for="task in tasks"
             :key="task.id"
             :task="task"
             @delete="remove"
      ></task>
    </ul>
</template>

<script>
  import Task from './Task.vue'
  export default {
    components: {
      Task,
    },
    props: ['tasks'],
    methods: {
      remove(task){
        this.$emit('delete-task', task.id);
      }
    }
  }
</script>
