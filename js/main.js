const { createApp } = Vue;

const app = createApp({
  data() {
    return {
      tasks: [],
    };
  },
  methods: {
    fetchTask() {
      axios.get("api/tasksApi.php").then((resp) => {
        this.tasks = resp.data;
        console.log(this.tasks);
      });
    },
  },
  mounted() {
    this.fetchTask();
  },
}).mount("#app");
