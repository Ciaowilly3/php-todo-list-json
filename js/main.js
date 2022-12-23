const { createApp } = Vue;

const app = createApp({
  data() {
    return {
      tasks: [],
      formData: {},
    };
  },
  methods: {
    fetchTask() {
      axios.get("api/tasksApi.php").then((resp) => {
        this.tasks = resp.data;
        console.log(this.tasks);
      });
    },
    addTask() {
      debugger;
      axios
        .post("api/taskCreator.php", this.formData, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((resp) => {
          debugger;
          this.fetchTask();
        });
    },
  },
  mounted() {
    this.fetchTask();
  },
}).mount("#app");
