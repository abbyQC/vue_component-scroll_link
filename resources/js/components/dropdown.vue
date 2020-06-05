<template>
  <div class="dropdown">
    <slot name="trigger"></slot>
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