<?php

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{
    public function artikel_get()
    {
        $id = $this->get('id');
        if ($id == '') {
            $artikel = $this->db->get('article')->result();
        } else {
            $this->db->where('slug', $id);
            $artikel = $this->db->get('article')->result();
        }
        $this->response($artikel, 200);
    }

    public function artikel_post()
    {
        $id = uniqid('', true);
        $title = $this->post('title');
        $slug = url_title($this->input->post('title'), 'dash', TRUE) . '-' . $id;
        $content = $this->post('content');
        $draft = $this->post('draft');

        $data = array(
            'id' => $id,
            'title' => $title,
            'slug' => $slug,
            'content' => $content,
            'draft' => $draft
        );

        $insert = $this->db->insert('article', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Gagal menambah data'
            ], 502);
        }
    }

    public function artikel_put()
    {
        $id = $this->put('id');
        $title = $this->put('title');
        $content = $this->put('content');
        $draft = $this->put('draft');

        $data = array(
            'id' => $id,
            'title' => $title,
            'content' => $content,
            'draft' => $draft
        );

        $this->db->where('id', $id);
        $update = $this->db->update('article', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Gagal menambah data'
            ], 502);
        }
    }

    public function artikel_delete()
    {
        $id = $this->delete('id');
        if ($id === null) {
            $this->response([
                'status' => false,
                'message' => 'provide an id'
            ], RestController::HTTP_BAD_REQUEST);
        } else {
            $this->db->where('id', $id);
            $delete = $this->db->delete('article');
            if ($delete) {
                // Ok
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'message' => 'deleted success'
                ], 200);
            } else {
                // id not found
                $this->response([
                    'status' => false,
                    'id' => $id,
                    'message' => 'id not found'
                ], RestController::HTTP_NOT_FOUND); // NOT_FOUND(404) being the HTTP response code

            }
        }
    }
}
