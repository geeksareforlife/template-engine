<?php

namespace GeeksAreForLife\TemplateEngine;

/**
 * Define all functions we expect. Lots of these are actually defined by PHPWord
 */
Interface ProcessorInterface
{
	public function setValue($search, $replace, $limit);

	public function getVariables();

	public function cloneRow($search, $numberOfClones);

	public function cloneBlock($blockname, $clones, $replace);

	public function deleteBlock($blockname);

	public function save();

	public function saveAs();
}