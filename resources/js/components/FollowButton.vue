<template>
    <div>
        <button
            class="btn btn-primary ml-4"
            @click="followUser"
            v-text="buttonText"
        >
            Follow
        </button>
    </div>
</template>

<script>
export default {
    props: ["userId", "follows"],

    mounted() {
        console.log("Component mounted.");
    },

    data: function () {
        return {
            status: this.follows,
        };
    },

    methods: {
        followUser() {
            axios.post("/follow/1").then((response) => {
                alert(response);
            });
        },
    },

    computed: {
        buttonText() {
            return this.status ? "Unfollow" : "Follow";
        },
    },
};
</script>
