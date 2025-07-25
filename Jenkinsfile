pipeline {
    agent any

    stages {
        stage('Clone Repo') {
            steps {
                git credentialsId: 'token-wp', url: 'https://github.com/siva-repocode/wp-scale.git'
            }
        }

        stage('Deploy to Server') {
            steps {
                publishOverSsh(
                    server: 'wp-server1',
                    transfers: [
                        sshTransfer(
                            sourceFiles: '**',
                            excludes: 'wp-content/uploads/**,wp-config.php',
                            removePrefix: '',
                            remoteDirectory: '',
                            execCommand: '''
                                echo "Deployment completed"
                            '''
                        )
                    ],
                    execTimeout: 120000,
                    verbose: true
                )
            }
        }
    }
}
