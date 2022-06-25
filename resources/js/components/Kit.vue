<template>
    <div>
        <h3 class="text-center">Список всех пользователей</h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
           Добавить
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Запись клинта</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Ф.И.О клиента :     <br>       <input type="text" name="name" placeholder="Введите Ф.И.О">
                    </div>

                    <div class="modal-body">
                       Телефон :     <br>              <input type="text" name="phone" placeholder="Номер телефона (без +992)">
                    </div>

                    <div class="modal-body">
                        Выберите время  <br><select >
                        <option>9:00</option>
                            <option>10:35</option>
                            <option>12:00</option>
                            <option>13:45</option>
                            <option>15:20</option>
                            <option>16:55</option>
                            <option>18:30</option>
                        </select>



                    </div>

                    <div class="modal-body">
                        Выбрать язык : <br><select >
                        <option>Английский язык</option>
                        <option>Русский язык</option>
                        <option>Китайский язык</option>
                        <option>Немецкий язык</option>
                        <option>Корейский язык</option>

                        </select>
                    </div>

                    <div class="modal-body">
                     Формат обучения :<br>  <select >
                        <option>Групповая форма</option>
                        <option>Индивидуальная форма</option>
                        <option>Интенсивная</option>

                        </select>
                    </div>

                    <div class="modal-body">
                        Источник :<br><input type="text" name="source" placeholder="Источник">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">закрыть</button>
                        <button type="button" class="btn btn-primary">Сохранить</button>
                    </div>
                </div>
            </div>
        </div>

        <br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Дата</th>
                <th>Ф.И.О</th>
                <th>Дата рождение</th>
                <th>Телефон</th>
                <th>Источник</th>
                <th>Курс</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="user in users" :key="user.id">
                <td>{{ user.id }}</td>
                <td>{{ user.full_name }}</td>
                <td>{{ user.birth_date }}</td>
                <td>{{ user.phone }}</td>
                <td>{{ user.source }}</td>
                <td>{{ user.course }}</td>

                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: user.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteUser(user.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
export default {
    data() {
        return {
            users: []
        }
    },
    created() {
        axios
            .get('http://localhost:8001/api/user')
            .then(response => {
                this.users = response.data;
            });
    },
    methods: {
        deleteUser(id) {
            this.axios

        }
    }
}
</script>
