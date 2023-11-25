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
                                <h5 class="card-title mb-0">
                                    LISTA DE CLIENTES
                                </h5>
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
                                            @click.prevent="displayModal = true"
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
                                            class="sorting"
                                            tabindex="0"
                                            aria-controls="DataTables_Table_0"
                                            rowspan="1"
                                            colspan="1"
                                            style="width: 237px"
                                            aria-label="Name: activate to sort column ascending"
                                        >
                                            ID
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
                                            NOMBRES Y APELLIDOS
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
                                            DNI
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
                                            CELULAR
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
                                            CORREO
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
                                            CODIGO
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
                                            REGISTRO
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
                                            FECHA DE EMISION
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
                                            HORAS LECTIVAS
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
                                    <tr v-for="item in CLIENTES" :key="item.id">
                                        <td>{{ item.id }}</td>
                                        <td>{{ item.nombres }}</td>
                                        <td>{{ item.dni }}</td>
                                        <td>{{ item.celular }}</td>
                                        <td>{{ item.correo }}</td>
                                        <td>{{ item.codigo }}</td>
                                        <td>{{ item.registro }}</td>
                                        <td>{{ item.fecha_emision }}</td>
                                        <td>{{ item.horas_lectivas }}</td>

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

                        <div class="d-flex justify-content-between row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination pagination-lg">
                                        <li class="page-item prev">

                                            <a class="page-link"  @click.prevent="changePage(pagination.current_page -1)"
                                                ><i
                                                    class="tf-icon bx bx-chevrons-left"
                                                ></i
                                            ></a>
                                        </li>
                                        <!-- <li class="page-item">
                                            <a class="page-link">1</a>
                                        </li> -->
                                        <!-- <li class="page-item">
                                        <a class="page-link" >2</a>
                                      </li>
                                      <li class="page-item active">
                                        <a class="page-link" >3</a>
                                      </li>
                                      <li class="page-item">
                                        <a class="page-link" >4</a>
                                      </li> -->
                                        <li class="page-item" v-for="page in pagesNumber" v-bind:class="[ page== isActived ?  'active' : '']" >
                                            <a class="page-link"  @click.prevent="changePage(page)">{{page}}</a>
                                        </li>
                                        <!-- <li class="page-item next" ion-lg"> -->
                                        <li class="page-item prev">
                                            <a class="page-link"  @click.prevent="changePage(pagination.current_page +1)"
                                                ><i
                                                    class="tf-icon bx bx-chevrons-right"
                                                ></i
                                            ></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            CLIENTES: [],
            IMPORT: [],
            file_excel: null,
            displayModal: false,

            pageNumber: 0,
            prePage: 5,
            pagination: {
                total: 0,
                current_page: 0,
                last_Page: 0,
                from: 0,
                to: 0,
            },
            offset:3
        };
    },

    mounted() {
        this.listarClientes();
    },

    computed: {
        isActived: function () {
            return this.pagination.current_page;
            console.log(this.pagination.current_page);
        },

        pagesNumber: function(){
            if (!this.pagination.to) {
                return [];
            }

            var from = this.pagination.current_page - this.offset;

            if (from < 1) {
                from = 1 ;
            }//todo

            var to = from + ( this.offset * 2);

            if (to >= this.pagination.last_Page) {
                to = this.pagination.last_Page;
            }

            var pagesArray = [];
            while (from <=to) {
                pagesArray.push(from);
                from++;
            }

            return pagesArray;
        }
    },

    methods: {
        async listarClientes() {
            this.CLIENTES = await (
                await axios.get("/api/cliente")
            ).data.clientes.data;

            this.pagination = await (
                await axios.get("/api/cliente")
            ).data.pagination;
            console.log(this.CLIENTES);
            console.log(this.pagination);
        },

        openModal() {
            this.displayModal = true;
            console.log(this.displayModal);
        },
        closeModal() {
            this.displayModal = false;
        },
        async SaveExcelUser() {
            //;
            const file = this.file_excel.target.files[0];
            const form = new FormData();
            form.append("file", file);
            try {
                const resp = await await axios.post("/api/clienteimport", form);
                console.log("resp", resp);
                this.listarClientes();
                alert("Termino el import");
            } catch (err) {
                alert(err);
                // console.log(" err", this.IMPORT)
            }
        },

        changePage(page){
            this.pagination.current_page = page;
            this.listarClientes(page);
        }
    },
};
</script>
