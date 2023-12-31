<table class="table">
    <tr>
        <th>
            <h3> <i class="fa-solid fa-bag-shopping"></i> <?= ' ' . __('Nova Venda') ?></h3>
        </th>
        <th class="align-right">
            <?= $this->element('action_index') ?>
        </th>
    </tr>
</table>
<div class="row">
    <div class="col-md-12">
        <?= $this->Form->create($sale) ?>
        <div class="row">
            <div class="col-md-6">
                <?= $this->Form->control('customer_name', ['required' => false, 'label' => 'Nome do Cliente', 'class' => 'form-control']); ?>
            </div>
            <div class="col-md-6">
                <?= $this->Form->control('customer_phone', ['required' => false, 'label' => 'Telefone do Cliente', 'class' => 'form-control']); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <?= $this->Form->control('customer_number', ['required' => false, 'label' => 'Cpf do Cliente', 'class' => 'form-control']); ?>
            </div>
            <div class="col-md-6">
                <?= $this->Form->control('customer_email', ['required' => false, 'label' => 'Email do Cliente', 'class' => 'form-control']); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?= $this->Form->control('customer_address', ['required' => false, 'label' => 'Endereço do Cliente', 'class' => 'form-control', 'rows' => '5']); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?= $this->Form->control('note', ['required' => false, 'label' => 'Anotação', 'class' => 'form-control', 'rows' => '5']); ?>
            </div>
        </div>
        <div class="text-center mt-4">
            <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-success']); ?>
        </div>
        <br>
        <?= $this->Form->end() ?>
    </div>
</div>