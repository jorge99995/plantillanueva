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
                                    LISTA DE CATEGORIAS
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
                                            placeholder="buscar categorias"
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

                                    <br />
                                    <button
                                        class="dt-button btn btn-primary"
                                        type="button"
                                        @click="showModal()"
                                    >
                                        <span
                                            ><i class="bx bx-plus me-1"></i>
                                            <span
                                                class="d-none d-lg-inline-block"
                                                >Agregar Nueva Categoria</span
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
                                            style="width: 300px"
                                            aria-label="Name: activate to sort column ascending"
                                        >
                                            ID
                                        </th>
                                        <th
                                            class="sorting"

                                            aria-controls="DataTables_Table_0"
                                            rowspan="1"
                                            colspan="1"
                                            style="width: 300px"
                                            aria-label="Name: activate to sort column ascending"
                                        >
                                            CATEGORIA
                                        </th>
                                        <th
                                            class="sorting"

                                            aria-controls="DataTables_Table_0"
                                            rowspan="1"
                                            colspan="1"
                                            style="width: 300px"
                                            aria-label="Email: activate to sort column ascending"
                                        >
                                            NOMBRE DEL CURSO
                                        </th>

                                        <th
                                            class="sorting_disabled"
                                            rowspan="1"
                                            colspan="1"
                                            style="width: 150px"
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
                                        <td>{{ item.celular }}</td>
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


                    </div>
                </div>
            </div>

        </div>


    </div>

    <div class="modal  " v-bind:class="{ mostrar: modalShow }" >
        <div class="modal-dialog modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalScrollableTitle">AGREGAR CATEGORIA</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
                @click="closeModal()"
                ></button>
            </div>
            <div class="modal-body">
                <div class="form-floating">
                    <input
                      type="text"
                      class="form-control"

                      placeholder="John Doe"
                      aria-describedby="floatingInputHelp" />
                    <label for="floatingInput">Nombre de la categoria</label>

                  </div>
                  <br>
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control"

                      placeholder="John Doe"
                      aria-describedby="floatingInputHelp" />
                    <label for="floatingInput">Nombre del Curso</label>
                  </div>
                  <br>
                  <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Seleccionar archivo a exportar</label>
                    <input class="form-control" type="file" id="formFileMultiple" multiple />
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" @click="closeModal()">
                Close
              </button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

</template>

<script>
export default {
    data() {
        return {

            modalShow: false,
        };
    },

    mounted() {

    },

    methods: {
        showModal() {
            // v form reset

            this.modalShow = true;
        },

        closeModal() {
            // v form reset
            // $("#exampleModal").modal("show"); /
            this.modalShow = false;
        },

    },
};
</script>
<style>
.mostrar {
    display: list-item;

}

</style>
