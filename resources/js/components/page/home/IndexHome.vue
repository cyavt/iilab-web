<template>
    <index-component :CheckBox="true" :CheckSidebar="true">

        <template v-slot:content>
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content">
                        <notice-home></notice-home>
                    </div>
                </div>
            </div>
        </template>

    </index-component>
</template>

<script>
import IndexComponent from '../../IndexComponent';
import NoticeHome from './NoticeHome';

export default {
    name: "IndexHome",
    components: {
        "IndexComponent": IndexComponent,
        "notice-home": NoticeHome,
    },
}
</script>
