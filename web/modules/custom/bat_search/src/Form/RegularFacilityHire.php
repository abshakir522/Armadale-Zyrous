<?php

namespace Drupal\bat_search\Form;
use Drupal\bee\Form\AddReservationForm;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\NodeInterface;
use Drupal\bat_event_series\Entity\EventSeries;

class RegularFacilityHire extends AddReservationForm
{



    
    /**
     * @inheritDoc
     */
    public function buildForm(array $form, FormStateInterface $form_state, NodeInterface $node = NULL, EventSeries $bat_event_series = NULL){
        $form['field_organization'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Organization'),
            '#maxlength' => 255,
            '#description' => $this->t('Organization name.'),
        ];
        return parent::buildForm($form, $form_state,$node,$bat_event_series);

    }



}