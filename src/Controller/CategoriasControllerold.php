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
        $categorias = $this->paginate($this->Categorias);

        $this->set(compact('categorias'));
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
        $categoria = $this->Categorias->get($id, [
            'contain' => [],
        ]);

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
                $this->Flash->success(__('La categoria ha sido guardada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La categoria no se ha guardado. Por favor, intenta de nuevo.'));
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
                $this->Flash->success(__('La categoria ha sido guardada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La categoria no se ha guardado. Por favor, intenta de nuevo.'));
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
            $this->Flash->success(__('La categoria ha sido eliminada.'));
        } else {
            $this->Flash->error(__('La categoria no se ha eliminado. Por favor, intenta de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
