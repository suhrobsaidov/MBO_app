<template>



    <div>
        <h3 class="text-center">Список всех Сотрудников</h3><br/>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="name" placeholder="Введите Ф.И.О">
                    </div>

                    <div class="modal-body">
                        <input type="text" name="name" placeholder="Введите Ф.И.О">
                    </div>

                    <div class="modal-body">
                        <input type="text" name="name" placeholder="Введите Ф.И.О">
                    </div>

                    <div class="modal-body">
                        <input type="text" name="name" placeholder="Введите Ф.И.О">
                    </div>

                    <div class="modal-body">
                        <input type="text" name="name" placeholder="Введите Ф.И.О">
                    </div>

                    <div class="modal-body">
                        <input type="text" name="name" placeholder="Введите Ф.И.О">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>

            <tr>
                <th>ID</th>
                <th>Ф.И.О</th>
                <th>e-mail</th>
                <th>Телефон</th>
                <th>Место работы</th>
                <th>Зарегистрирован</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="user in users" :key="user.id">
                <td>{{ user.id }}</td>
                <td>{{ user.full_name }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.phone }}</td>
                <td>{{ user.place }}</td>
                <td>{{ user.created_at }}</td>

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
        axios
            .delete('http://localhost:8001/api/user/{id}')

        }
    }
}
</script>
