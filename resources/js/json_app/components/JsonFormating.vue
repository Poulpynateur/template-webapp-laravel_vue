<template>
  <div ref="json_form" v-bind:class="{ 'has-error': json.hasError }" class="form-group">

    <label class="form-label">Write some JSON :</label>
    <p ref="json_error_msg" v-if="json.hasError" class="form-input-hint my-1">{{ json.errorInfo }}</p>

    <textarea 
    ref="json_input" 
    @change="JSONChange"
    class="form-input" placeholder="JSON content">
    </textarea>

    <visual-manager v-bind:data="json.content"></visual-manager>

  </div>
</template>

<script>

import VisualManager from "./VisualManager";

export default {
  name: "JsonFormating",
  data: function() {
    return {
      json: {
        content: null,
        hasError: false,
        errorInfo: ""
      }
    };
  },
  components: {
      VisualManager
  },
  methods: {
    JSONChange() {
      this.json.hasError = false;
      try {
        this.json.content = JSON.parse(this.$refs.json_input.value);
        
      } catch(e) {
        this.json.hasError = true;
        this.json.errorInfo = e;
      }
    }
  }
};
</script>