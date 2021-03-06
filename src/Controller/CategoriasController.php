<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Categorias Controller
 *
 * @property \App\Model\Table\CategoriasTable $Categorias
 * @method \App\Model\Entity\Categoria[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategoriasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {

        //debug($this->getData('edicion')==0){

       // }

       if($this->request->getData('edicion')==0){
           $categoria = $this->Categorias->newEmptyEntity();
       } else{
           $categoria = $this->Categorias->get($this->request->getData('id'),[
               'contain' => []
           ]);
       }


        //print_r($this->request);
        //exit;
      //  $categoria = $this->Categorias->newEmptyEntity();
        if ($this->request->is('post')) {
           
            $categoria = $this->Categorias->patchEntity($categoria, $this->request->getData());
            $guardado = $this->Categorias->save($categoria);

            if ($guardado) {
                $this->Flash->success(__('Categoria registrada correctamente'));
                $id = $guardado['id'];
                return $this->redirect(['controller'=>'categorias', 'action' => 'view', $id]);
            }
            $this->Flash->error(__('La categoria no fue registrada. Intente nuevamente.'));
        }
        else{
            $categorias = $this->paginate($this->Categorias);
            $this->set(compact('categorias'));
            $this->set(compact('categoria'));
        }
    }


   

    /**
     * View method
     *
     * @param string|null $id Categoria id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
            //Categoria selecionada
        $categoria = $this->Categorias->get($id, [
            'contain' => ['Productos'],
        ]);

            //datos de todas las categorias para el ASIDE
        $categorias = $this->paginate($this->Categorias);

        $this->set(compact('categorias'));
        $this->set(compact('categoria'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoria = $this->Categorias->newEmptyEntity();
        if ($this->request->is('post')) {
            $categoria = $this->Categorias->patchEntity($categoria, $this->request->getData());
            if ($this->Categorias->save($categoria)) {
                $this->Flash->success(__('The categoria has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categoria could not be saved. Please, try again.'));
        }
        $this->set(compact('categoria'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Categoria id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoria = $this->Categorias->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoria = $this->Categorias->patchEntity($categoria, $this->request->getData());
            if ($this->Categorias->save($categoria)) {
                $this->Flash->success(__('The categoria has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categoria could not be saved. Please, try again.'));
        }
        $this->set(compact('categoria'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Categoria id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoria = $this->Categorias->get($id);
        if ($this->Categorias->delete($categoria)) {
            $this->Flash->success(__('The categoria has been deleted.'));
        } else {
            $this->Flash->error(__('The categoria could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
