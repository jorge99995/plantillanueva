<template lang="">
    <div class="card">
        <div
            class="tab-content doc-example-content"
            id="tab-tabContent"
            data-label="Example"
        >
            <div
                class="tab-pane fade show active"
                id="basic-datatable-preview"
                role="tabpanel"
                aria-labelledby="basic-datatable-preview-tab"
            >
                <div class="card-datatable table pt-0">
                    <div class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="card-header">
                            <div class="head-label text-start col-lg-12">
                                <h5 class="card-title mb-0">LISTA DE CURSOS</h5>
                            </div>
                        </div>

                        <div class="row">
                            <div
                                class="dt-action-buttons col-lg-4 col-md-6 col-12"
                            >
                                <div class="dt-buttons">
                                    <div class="input-group input-group-merge">
                                        <span
                                            class="input-group-text"
                                            id="basic-addon-search31"
                                            ><i class="bx bx-search"></i
                                        ></span>
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Search..."
                                            aria-label="Search..."
                                            aria-describedby="basic-addon-search31"
                                        />
                                    </div>
                                </div>
                            </div>

                            <div
                                class="dt-action-buttons text-end col-lg-8 col-md-6 col-12"
                            >
                                <div class="dt-buttons">
                                    <div class="input-group">
                                        <input
                                            type="file"
                                            class="form-control"
                                            @change="file_excel = $event"
                                            id="usuarios"
                                            name="usuarios"
                                            aria-describedby="inputGroupFileAddon04"
                                            aria-label="Upload"
                                        />
                                        <button
                                            class="btn btn-outline-primary"
                                            type="button"
                                            name="usuarios"
                                            @click="SaveExcelUser()"
                                        >
                                            <span
                                                ><i
                                                    class="bx bx-export me-sm-1"
                                                ></i>
                                                <span
                                                    class="d-none d-sm-inline-block"
                                                    >Importar datos</span
                                                ></span
                                            >
                                        </button>
                                    </div>
                                    <br />
                                    <button
                                        class="dt-button btn btn-primary"
                                        type="button"
                                        data-target="#exampleModal"
                                        @click="showModal()"
                                    >
                                        <span
                                            ><i class="bx bx-plus me-1"></i>
                                            <span
                                                class="d-none d-lg-inline-block"
                                                >Agregar Nuevo Usuario</span
                                            ></span
                                        >
                                    </button>
                                </div>
                            </div>
                        </div>
                        <br />

                        <br />
                        <!--Tabla-->
                        <div class="table-responsive text-nowrap">
                            <table class="table border-top">
                                <thead>
                                    <tr>
                                        <th
                                            class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all"
                                            rowspan="1"
                                            colspan="1"
                                            style="width: 18px"
                                            data-col="1"
                                            aria-label=""
                                        >
                                            <input
                                                type="checkbox"
                                                class="form-check-input"
                                            />
                                        </th>
                                        <th
                                            class="sorting"
                                            tabindex="0"
                                            aria-controls="DataTables_Table_0"
                                            rowspan="1"
                                            colspan="1"
                                            style="width: 237px"
                                            aria-label="Name: activate to sort column ascending"
                                        >
                                            NOMBRE DEL CURSO
                                        </th>
                                        <th
                                            class="sorting"
                                            tabindex="0"
                                            aria-controls="DataTables_Table_0"
                                            rowspan="1"
                                            colspan="1"
                                            style="width: 225px"
                                            aria-label="Email: activate to sort column ascending"
                                        >
                                            ROLES
                                        </th>
                                        <th
                                            class="sorting"
                                            tabindex="0"
                                            aria-controls="DataTables_Table_0"
                                            rowspan="1"
                                            colspan="1"
                                            style="width: 75px"
                                            aria-label="Date: activate to sort column ascending"
                                        >
                                            FECHA
                                        </th>

                                        <th
                                            class="sorting"
                                            tabindex="0"
                                            aria-controls="DataTables_Table_0"
                                            rowspan="1"
                                            colspan="1"
                                            style="width: 103px"
                                            aria-label="Status: activate to sort column ascending"
                                        >
                                            ESTADO
                                        </th>

                                        <th
                                            class="sorting_disabled"
                                            rowspan="1"
                                            colspan="1"
                                            style="width: 65px"
                                            aria-label="Actions"
                                        >
                                            ACCIONES
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr v-for="item in USUARIOS" :key="item.id">
                                        <td class="dt-checkboxes-cell">
                                            <input
                                                type="checkbox"
                                                class="dt-checkboxes form-check-input"
                                            />
                                        </td>
                                        <td>
                                            <div
                                                class="d-flex justify-content-start align-items-center"
                                            >
                                                <div class="avatar-wrapper">
                                                    <div class="avatar me-2">
                                                        <span
                                                            class="avatar-initial rounded-circle bg-label-danger"
                                                        >
                                                            <img
                                                                src="img/avatars/5.png"
                                                                alt="Avatar"
                                                                class="rounded-circle"
                                                        /></span>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <span
                                                        class="emp_name text-truncate"
                                                        >{{
                                                            item.name +
                                                            " " +
                                                            item.surname
                                                        }}</span
                                                    ><small
                                                        class="emp_post text-truncate text-muted"
                                                        >{{ item.email }}</small
                                                    >
                                                </div>
                                            </div>
                                        </td>

                                        <td>{{ item.role.name }}</td>
                                        <td>{{ item.created_at }}</td>
                                        <td>
                                            <span
                                                class="badge bg-label-primary me-1"
                                                v-if="item.state == 1"
                                                >Activo</span
                                            >
                                            <span
                                                class="badge bg-label-danger me-1"
                                                v-if="item.state == 2"
                                                >Des-Activo</span
                                            >
                                        </td>
                                        <td>
                                            <a
                                                href=""
                                                class="btn btn-sm btn-icon"
                                                ><i class="bx bxs-box"></i
                                            ></a>

                                            <a
                                                href=""
                                                class="btn btn-sm btn-icon item-edit"
                                                ><i class="bx bxs-edit"></i
                                            ></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!-- <div class="d-flex justify-content-between row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6">
                                <div
                                    class="dataTables_paginate paging_simple_numbers"
                                    id="DataTables_Table_0_paginate"
                                >
                                    <ul class="pagination">
                                        <li
                                            class="paginate_button page-item previous disabled"
                                            id="DataTables_Table_0_previous"
                                        >
                                            <a
                                                aria-controls="DataTables_Table_0"
                                                aria-disabled="true"
                                                role="link"
                                                data-dt-idx="previous"
                                                tabindex="0"
                                                class="page-link"
                                                >Previous</a
                                            >
                                        </li>
                                        <li
                                            class="paginate_button page-item active"
                                        >
                                            <a
                                                href="#"
                                                aria-controls="DataTables_Table_0"
                                                role="link"
                                                aria-current="page"
                                                data-dt-idx="0"
                                                tabindex="0"
                                                class="page-link"
                                                >1</a
                                            >
                                        </li>
                                        <li class="paginate_button page-item">
                                            <a
                                                href="#"
                                                aria-controls="DataTables_Table_0"
                                                role="link"
                                                data-dt-idx="1"
                                                tabindex="0"
                                                class="page-link"
                                                >2</a
                                            >
                                        </li>
                                        <li class="paginate_button page-item">
                                            <a
                                                href="#"
                                                aria-controls="DataTables_Table_0"
                                                role="link"
                                                data-dt-idx="2"
                                                tabindex="0"
                                                class="page-link"
                                                >3</a
                                            >
                                        </li>
                                        <li class="paginate_button page-item">
                                            <a
                                                href="#"
                                                aria-controls="DataTables_Table_0"
                                                role="link"
                                                data-dt-idx="3"
                                                tabindex="0"
                                                class="page-link"
                                                >4</a
                                            >
                                        </li>
                                        <li class="paginate_button page-item">
                                            <a
                                                href="#"
                                                aria-controls="DataTables_Table_0"
                                                role="link"
                                                data-dt-idx="4"
                                                tabindex="0"
                                                class="page-link"
                                                >5</a
                                            >
                                        </li>
                                        <li
                                            class="paginate_button page-item disabled"
                                            id="DataTables_Table_0_ellipsis"
                                        >
                                            <a
                                                aria-controls="DataTables_Table_0"
                                                aria-disabled="true"
                                                role="link"
                                                data-dt-idx="ellipsis"
                                                tabindex="0"
                                                class="page-link"
                                                >…</a
                                            >
                                        </li>
                                        <li class="paginate_button page-item">
                                            <a
                                                href="#"
                                                aria-controls="DataTables_Table_0"
                                                role="link"
                                                data-dt-idx="14"
                                                tabindex="0"
                                                class="page-link"
                                                >15</a
                                            >
                                        </li>
                                        <li
                                            class="paginate_button page-item next"
                                            id="DataTables_Table_0_next"
                                        >
                                            <a
                                                href="#"
                                                aria-controls="DataTables_Table_0"
                                                role="link"
                                                data-dt-idx="next"
                                                tabindex="0"
                                                class="page-link"
                                                >Next</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>



        <!-- <div class="modal " v-bind:class="{ mostrar: modalShow }">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLongTitle">
                            Modal title
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                            @click="closeModal()"
                        ></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            Cras mattis consectetur purus sit amet fermentum.
                            Cras justo odio, dapibus ac facilisis in, egestas
                            eget quam. Morbi leo risus, porta ac consectetur ac,
                            vestibulum at eros.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-outline-secondary"
                            data-bs-dismiss="modal"
                            @click="closeModal()"
                        >
                            Close
                        </button>
                        <button type="button" class="btn btn-primary">
                            Save changes
                        </button>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div class="modal  " v-bind:class="{ mostrar: modalShow }" >
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalScrollableTitle">Modal title</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
                @click="closeModal() "
                ></button>
            </div>
            <div class="modal-body">
              <p>
                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
              </p>
              <p>
                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                lacus vel augue laoreet rutrum faucibus dolor auctor.
              </p>
              <p>
                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                auctor fringilla.
              </p>
              <p>
                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
              </p>
              <p>
                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                lacus vel augue laoreet rutrum faucibus dolor auctor.
              </p>
              <p>
                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                auctor fringilla.
              </p>
              <p>
                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
              </p>
              <p>
                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                lacus vel augue laoreet rutrum faucibus dolor auctor.
              </p>
              <p>
                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                auctor fringilla.
              </p>
              <p>
                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
              </p>
              <p>
                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                lacus vel augue laoreet rutrum faucibus dolor auctor.
              </p>
              <p>
                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                auctor fringilla.
              </p>
              <p>
                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
              </p>
              <p>
                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                lacus vel augue laoreet rutrum faucibus dolor auctor.
              </p>
              <p>
                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                auctor fringilla.
              </p>
              <p>
                Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis
                in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.
              </p>
              <p>
                Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                lacus vel augue laoreet rutrum faucibus dolor auctor.
              </p>
              <p>
                Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus
                auctor fringilla.
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" @click="closeModal() ">
                Close
              </button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

</template>

<script>
import Create from "./Create.vue";
export default {
    data() {
        return {
            USUARIOS: [],
            IMPORT: [],
            file_excel: null,
            modalShow: false,
        };
    },
    components: {
        Create,
    },
    mounted() {
        this.listarUsuarios();
    },

    methods: {
        showModal() {
            // v form reset
            // $("#exampleModal").modal("show"); /
            this.modalShow = true;
        },

        closeModal() {
            // v form reset
            // $("#exampleModal").modal("show"); /
            this.modalShow = false;
        },

        async listarUsuarios() {
            this.USUARIOS = await (
                await axios.get("/api/user")
            ).data.users.data;
            // console.log(this.USUARIOS);
        },

        async SaveExcelUser() {
            //;
            const file = this.file_excel.target.files[0];
            const form = new FormData();
            form.append("file", file);
            try {
                const resp = await await axios.post("/api/importuser", form);
                console.log("resp", resp);
                this.listarUsuarios();
                alert("Termino el import");
            } catch (err) {
                alert(err);
                console.log(" err", this.IMPORT);
            }
        },
    },
};
</script>
<style>
.mostrar {
    display: list-item;
    transition: transform 0.15s ease-out;
}


</style>
