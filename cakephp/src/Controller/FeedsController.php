<?php
declare(strict_types=1);

namespace App\Controller;

class FeedsController extends AppController
{
    public function view($id = null)
    {
        $feed = $this->Feeds->get($id, [
            'contain' => [],
        ]);

        $this->set('feed', $feed);
    }

    public function add()
    {
        $feed = $this->Feeds->newEmptyEntity();
        if ($this->request->is('post')) {
            $feed = $this->Feeds->patchEntity($feed, $this->request->getData());
            if ($this->Feeds->save($feed)) {
                $this->Flash->success(__('The feed has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The feed could not be saved. Please, try again.'));
        }
        $this->set(compact('feed'));
    }

    public function edit($id = null)
    {
        $feed = $this->Feeds->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $feed = $this->Feeds->patchEntity($feed, $this->request->getData());
            if ($this->Feeds->save($feed)) {
                $this->Flash->success(__('The feed has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The feed could not be saved. Please, try again.'));
        }
        $this->set(compact('feed'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $feed = $this->Feeds->get($id);
        if ($this->Feeds->delete($feed)) {
            $this->Flash->success(__('The feed has been deleted.'));
        } else {
            $this->Flash->error(__('The feed could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'feed']);
    }

    public function feed()
    {
        $feed = $this->Feeds->newEmptyEntity();
        if ($this->request->is('post')) {
            $feed = $this->Feeds->patchEntity($feed, $this->request->getData());
            if ($this->Feeds->save($feed)) {
                $this->Flash->success(__('The feed has been saved.'));

                return $this->redirect(['action' => 'feed']);
            }
            $this->Flash->error(__('The feed could not be saved. Please, try again.'));
        }
        $this->set(compact('feed'));
        $feeds = $this->paginate($this->Feeds);

        $feeds = $this->Feeds->find('all', [
            'order' => 'Feeds.id DESC'
        ]);
        $this->set(compact('feeds'));
    }
}
