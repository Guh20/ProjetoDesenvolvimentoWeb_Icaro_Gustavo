const modal = document.querySelector('.modal-container')
const tbody = document.querySelector('tbody')
const scliente = document.querySelector('#m-cliente')
const stelefone = document.querySelector('#m-telefone')
const semail = document.querySelector('#m-email')
const sdata = document.querySelector('#m-data')
const sdescricao = document.querySelector('#m-descricao')
const btnSalvar = document.querySelector('#btnSalvar')

let itens
let id

function openModal(edit = false, index = 0) {
  modal.classList.add('active')

  modal.onclick = e => {
    if (e.target.classcliente.indexOf('modal-container') !== -1) {
      modal.classList.remove('active')
    }
  }

  if (edit) {
    scliente.value = itens[index].cliente
    stelefone.value = itens[index].telefone
    semail.value = itens[index].email
    sdata.value = itens[index].data
    sdescricao.value = itens[index].descricao
    id = index
  } else {
    scliente.value = ''
    stelefone.value = ''
    semail.value = ''
    sdata.value = ''
    sdescricao.value = ''
  }
  
}

function editItem(index) {

  openModal(true, index)
}

function deleteItem(index) {
  itens.splice(index, 1)
  setItensBD()
  loadItens()
}

function insertItem(item, index) {
  let tr = document.createElement('tr')

  tr.innerHTML = `
    <td>${item.cliente}</td>
    <td>${item.telefone}</td>
    <td>${item.email}</td>
    <td>${item.data}</td>
    <td>${item.descricao}</td>
    <td class="acao">
      <button onclick="editItem(${index})"><i class='bx bx-edit' ></i></button>
    </td>
    <td class="acao">
      <button onclick="deleteItem(${index})"><i class='bx bx-trash'></i></button>
    </td>
  `
  tbody.appendChild(tr)
}

btnSalvar.onclick = e => {
  
  if (scliente.value == '' || stelefone.value == '' || semail.value == '' || sdata.value == '' || sdescricao.value == '') {
    return
  }

  e.preventDefault();

  if (id !== undefined) {
    itens[id].cliente = scliente.value
    itens[id].telefone = stelefone.value
    itens[id].email = semail.value
    itens[id].data = sdata.value
    itens[id].descricao = sdescricao.value
  } else {
    itens.push({'cliente': scliente.value, 'telefone': stelefone.value, 'email': semail.value, 'data': sdata.value, 'descricao': sdescricao.value, })
  }

  setItensBD()

  modal.classList.remove('active')
  loadItens()
  id = undefined
}

function loadItens() {
  itens = getItensBD()
  tbody.innerHTML = ''
  itens.forEach((item, index) => {
    insertItem(item, index)
  })

}

const getItensBD = () => JSON.parse(localStorage.getItem('dbfunc')) ?? []
const setItensBD = () => localStorage.setItem('dbfunc', JSON.stringify(itens))

loadItens()