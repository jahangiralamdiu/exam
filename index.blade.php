@extends('layouts.main')

@section('content')

<div class="row">

        <div class="col-lg-10 col-lg-offset-1">
            <section class="panel">
                <header class="panel-heading">
                    <a href="#myModal" data-toggle="modal" class="btn btn-lg btn-success">
                        Create an Exam
                    </a>

                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                    <h4 class="modal-title">Create an Exam</h4>
                                </div>
                                <div class="modal-body">

                                    <form role="form">
                                        <div class="form-group">
                                            <label for="examTitle">Enter Exam Title</label>
                                            <input type="text" class="form-control" id="examTitle" placeholder="Enter exam title">
                                        </div>
                                        <div class="form-group">
                                            <label for="coursId">Select Course</label>
                                            <select id="coursId" class="form-control input-medium m-bot15">
                                                <option>Laravel</option>
                                                <option>Unity</option>
                                                <option>Unity</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="examType">Select Exam Type</label>
                                            <select id="examType" class="form-control input-medium m-bot15">
                                                <option>MCQ</option>
                                                <option>Assignment</option>
                                                <option>Oral</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="totalMarks">Total Marks</label>
                                            <input type="number" class="form-control" id="totalMarks" placeholder="Enter Total Marks">

                                        </div>

                                        <div class="form-group">
                                            <label for="examTitle">Enter Exam Duration</label>
                                            <input type="number" class="form-control" id="examDuration" placeholder="Enter exam duration">
                                            <p class="help-block">Exam duration in minute</p>
                                        </div>

                                        <button type="submit" class="btn btn-send">Save Exam</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <div class="panel-body">
                    <div class="adv-table editable-table ">
                        <div class="clearfix">
                            <div class="btn-group pull-right">
                                <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Print</a></li>
                                    <li><a href="#">Save as PDF</a></li>
                                    <li><a href="#">Export to Excel</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="space15"></div>
                        <table class="table table-striped table-hover table-bordered" id="editable-sample">
                            <thead>
                            <tr>
                                <th>Exam Name</th>
                                <th>Course</th>
                                <th>Exam Type</th>
                                <th>Total Marks</th>
                                <th>Duration</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Set Question</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="">
                                <td>Laravel-HTML</td>
                                <td>Laravel</td>
                                <td>Quiz</td>
                                <td class="center">50</td>
                                <td class="center">60</td>
                                <td><a class="edit" href="javascript:;">{{ link_to_route('exams.edit', 'Edit') }}</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                                <td><a class="edit" href="javascript:;">Set Ques</a></td>
                            </tr>
                            <tr class="">
                                <td>Laravel-HTML</td>
                                <td>Laravel</td>
                                <td>Quiz</td>
                                <td class="center">50</td>
                                <td class="center">60</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                                <td><a class="edit" href="javascript:;">Set Ques</a></td>
                            </tr><tr class="">
                                <td>Laravel-HTML</td>
                                <td>Laravel</td>
                                <td>Quiz</td>
                                <td class="center">50</td>
                                <td class="center">60</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                                <td><a class="edit" href="javascript:;">Set Ques</a></td>
                            </tr><tr class="">
                                <td>Laravel-HTML</td>
                                <td>Laravel</td>
                                <td>Quiz</td>
                                <td class="center">50</td>
                                <td class="center">60</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                                <td><a class="edit" href="javascript:;">Set Ques</a></td>
                            </tr><tr class="">
                                <td>Laravel-HTML</td>
                                <td>Laravel</td>
                                <td>Quiz</td>
                                <td class="center">50</td>
                                <td class="center">60</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                                <td><a class="edit" href="javascript:;">Set Ques</a></td>
                            </tr>
                            <tr class="">
                                <td>Laravel-HTML</td>
                                <td>Laravel</td>
                                <td>Quiz</td>
                                <td class="center">50</td>
                                <td class="center">60</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                                <td><a class="edit" href="javascript:;">Set Ques</a></td>
                            </tr>
                            <tr class="">
                                <td>Laravel-HTML</td>
                                <td>Laravel</td>
                                <td>Quiz</td>
                                <td class="center">50</td>
                                <td class="center">60</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                                <td><a class="edit" href="javascript:;">Set Ques</a></td>
                            </tr>
                            <tr class="">
                                <td>Laravel-HTML</td>
                                <td>Laravel</td>
                                <td>Quiz</td>
                                <td class="center">50</td>
                                <td class="center">60</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                                <td><a class="edit" href="javascript:;">Set Ques</a></td>
                            </tr>
                            <tr class="">
                                <td>Laravel-HTML</td>
                                <td>Laravel</td>
                                <td>Quiz</td>
                                <td class="center">50</td>
                                <td class="center">60</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                                <td><a class="edit" href="javascript:;">Set Ques</a></td>
                            </tr>
                            <tr class="">
                                <td>Laravel-HTML</td>
                                <td>Laravel</td>
                                <td>Quiz</td>
                                <td class="center">50</td>
                                <td class="center">60</td>
                                <td><a class="edit" href="javascript:;">Edit</a></td>
                                <td><a class="delete" href="javascript:;">Delete</a></td>
                                <td><a class="edit" href="javascript:;">Set Ques</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
</div>

@stop
