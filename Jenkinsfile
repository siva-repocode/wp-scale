pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git credentialsId: 'token-wp', url: 'https://github.com/siva-repocode/wp-scale.git', branch: 'master'
            }
        }

        stage('Deploy to Server') {
            steps {
                step([$class: 'BapSshPublisherPlugin',
                    publishers: [
                        [$class: 'BapSshPublisher',
                            configName: 'wp-server1', 
                            transfers: [
                                [$class: 'BapSshTransfer',
                                    sourceFiles: '**',
                                    removePrefix: '',
                                    remoteDirectory: '',
                                    execCommand: '''
                                        chown -R www-data:www-data /var/www/html/wordpress
                                        echo "Deployed!"
                                    '''
                                ]
                            ],
                            usePromotionTimestamp: false,
                            verbose: true
                        ]
                    ]
                ])
            }
        }
    }
}
