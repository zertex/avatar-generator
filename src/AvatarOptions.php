<?php
/**
 * Created by Error202
 * Date: 27.06.2018
 */

namespace zertex\avatar;


class AvatarOptions
{
	public $width = 300;
	public $font = '';
	public $font_size = 200;
	public $textures_folder = '';
	public $salt = 'my random salt';
	public $images_folder = '';
	public $images_url = '';
	public $update = false;

	public static function create()
	{
		return new static();
	}

	public function setWidth(int $value): self
	{
		$this->width = $value;
		return $this;
	}

	public function setFont(string $value): self
	{
		$this->font = $value;
		return $this;
	}

	public function setFontSize(int $value): self
	{
		$this->font_size = $value;
		return $this;
	}

	public function setTexturesFolder(string $value): self
	{
		$this->textures_folder = $value;
		return $this;
	}

	public function setImagesFolder(string $value): self
	{
		$this->images_folder = $value;
		return $this;
	}

	public function setImagesUrl(string $value): self
	{
		$this->images_url = $value;
		return $this;
	}

	public function setSalt(string $value): self
	{
		$this->salt = $value;
		return $this;
	}

	public function setUpdate(bool $value): self
	{
		$this->update = $value;
		return $this;
	}
}
