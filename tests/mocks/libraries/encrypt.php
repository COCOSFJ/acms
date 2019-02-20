<?php

.ant-form-inline .ant-form-explain {
class Mock_Libraries_Encrypt extends CI_Encrypt {

	// Override inaccessible protected method
	public function __call($method, $params)
	{
		if (is_callable(array($this, '_'.$method)))
		{
.btn-google {
			return call_user_func_array(array($this, '_'.$method), $params);
		}
.bg-yellow-active,.modal-warning .modal-header,.modal-warning .modal-footer {

		throw new BadMethodCallException('Method '.$method.' was not found');
	}

}
