<template>
    <div class="hello">
        <el-form :model="ruleForm" :rules="rules" ref="ruleForm" class="demo-ruleForm">
            <el-form-item label="用户名" prop="name">
                <el-input v-model="ruleForm.name"></el-input>
            </el-form-item>
            <el-form-item label="用户类型" prop="type">
                <el-select v-model="ruleForm.type" placeholder="请选择专利类型" style="width:500px;">
                    <el-option label="一级管理员" value="1"></el-option>
                    <el-option label="二级管理员" value="2"></el-option>
                    <el-option label="三级管理员" value="3"></el-option>
                    <el-option label="普通用户" value="4"></el-option>
                </el-select>
            </el-form-item>
            <el-form-item label="出生日期" prop="date">
                <el-input v-model="ruleForm.date"></el-input>
            </el-form-item>
            <el-form-item label="备注" prop="intro">
                <el-input type="textarea" v-model="ruleForm.intro" :rows="10"></el-input>
                </el-form-item>
            <el-form-item>
            <el-button type="primary" @click="submitForm('ruleForm')">提交</el-button>
            </el-form-item>
        </el-form>
    </div>
</template>

<script>
export default {
  name: 'hello',
  data: function () {
    return {
      ruleForm: {
        name: '',
        type: '',
        date: '',
        intro: ''
      }
    }
  },
  rules: {
    name: [
      { required: true, message: '请输入用户名', trigger: 'blur' },
      { min: 1, max: 20, message: '长度在 1 到20个字符', trigger: 'blur' }
    ],
    type: [
      { required: true, message: '请选择用户类型', trigger: 'change' }
    ],
    date: [
      { required: true, message: '请输入出生日期', trigger: 'blur' },
      { min: 1, max: 100, message: '长度在 1 到 100 个字符', trigger: 'blur' }
    ],
    intro: [
      { required: true, message: '请输入备注', trigger: 'blur' },
      { min: 50, max: 500, message: '请输入至少50个字', trigger: 'blur' }
    ]
  },
  methods: {
    submitForm: function (formName) {
      this.$refs[formName].validate((valid) => {
        if (valid) {
          this.$http.get(baseURL + 'api/create?table=user&' + getParamsString(param)).then(
            function (res) {
              if (res.body === 1) {
                this.$alert('提交成功', '提交结果', {
                  confirmButtonText: '确定',
                  type: 'success',
                  callback: action => {
                  }
                })
              } else {
                this.$alert('提交失败', '提交结果', {
                  confirmButtonText: '确定',
                  type: 'warning',
                  callback: action => {
                  }
                })
              }
            }
          )
        } else {
          console.log('error submit!!')
          return false
        }
      })
    }
  }
}
</script>
