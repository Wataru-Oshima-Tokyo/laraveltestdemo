<tempate>
<div class="error-message" v-for="error in errors" :key="error.id">{{ error.message }}</div>
    <form @submit.prevent="postInquiry">
        <!-- full_name -->
        <div>
            <label class="required">氏名</label>
            <input v-model.trim="fullName" type="text" placeholder="test_name" maxlength="255" required>
        </div>
        <!-- email -->
        <div>
            <label class="required">メールアドレス</label>
            <input v-model.trim="email" type="email" placeholder="test_mail" required>
        </div>
        <!-- buttun -->
        <div>
            <button>同意して問い合わせる</button>
        </div>
    </form>
</template>

<script>
    export default {
        data() {
            return {
                errors: [],
                fullName: '',
                email: ''
            }
        },
        methods: {
            postInquiry() {
                const url = '/api/mail/inquiry';
                const self = this;
                //axiosでPOST送信
                axios.post(url, this.fullName, this.email)
                .then(res => {
                    if(res.data.result) {
                        //メール送信完了画面に遷移する
                    } else {
                        self.errors = res.data.errors;
                    }
                })
                .catch(
                    err => {
                        //例外処理を行う
                    }
                );
            }
        }
    }
</script>
