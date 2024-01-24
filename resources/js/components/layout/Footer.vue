<template>
    <div class="footer">
        <div class="pull-right">
            <strong>CYA</strong> | Laravel-Vue
        </div>
        <div>
            <strong>{{ text }}</strong> &copy; 2023
        </div>
    </div>
</template>

<script>
export default {
    name: "FooterComponent",
    props: {
        text: String,
    },
}
</script>
