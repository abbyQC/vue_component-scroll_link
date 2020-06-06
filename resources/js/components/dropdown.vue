<template>
  <div class="dropdown">
    <div class="dropdown-trigger" @click.prevent="isOpen = ! isOpen">
      <slot name="trigger"></slot>
    </div>

    <div v-show="isOpen">
      <slot></slot>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      isOpen: false
    };
  }
};
</script>