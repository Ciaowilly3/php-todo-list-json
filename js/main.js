const { createApp } = Vue;

const app = createApp({
  data() {
    return {
      tasks: [{}],
    };
  },
  methods: {
    fetchTask() {
      axios.get("api/tasksApi.php").then((resp) => {
        this.tasksFill(resp.data);
      });
    },
    tasksFill(data) {
      debugger;
      this.tasks = [...data];
    },
  },
  mounted() {
    this.fetchTask();
  },
}).mount("#app");
