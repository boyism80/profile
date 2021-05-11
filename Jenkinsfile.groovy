pipeline {
    agent { label 'slave' }
    stages {
        stage('Rebuild') {
            steps {
                sh 'fab -f deploy/fabfile.py deploy'
            }
        }
    }

    post {
        always {
            discordSend description: "Profile web page is updated.\nBuild ${env.BUILD_NUMBER}", 
                        footer: currentBuild.currentResult, 
                        link: env.BUILD_URL, 
                        result: currentBuild.currentResult, 
                        title: "Profile", 
                        webhookURL: "https://discordapp.com/api/webhooks/797560289905082388/y1bsZom7NB61ssDyxz4h0ByE9TMr3UfCjY5j_raAecuMdiQg79FdvVbat5ZzaalmOFTC"
        }
    }
}
